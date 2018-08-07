<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\CreateProductRequest;
use Yajra\Datatables\Datatables;
use DB;
use App\GalleryProduct;
use App\Tag;
use App\ProductDetail;
use App\Category;
use App\Vendor;
use Session;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

    public function __construct(){
        // $this->middleware('admin.auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $tags = Tag::all();
        $categories = Category::where('parent_id', '!=', 0)->get();
        $vendors = Vendor::all();
        return view('admin.products.index', compact('tags','categories',  'vendors'))->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tags = Tag::all();
        $categories = Category::where('parent_id', '!=', 0)->get();
        $vendors = Vendor::all();
        return view('admin.products.create', compact('categories', 'vendors'))->with('tags', $tags);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {

       
        $product = new Product();
        $product->name = $request->name;
        $product->product_code = $request->product_code;
        $product->slug = $request->slug;
        $product->original_price = ProductsController::strToInt($request->original_price);
        $product->price = ProductsController::strToInt($request->price);
        $product->description = $request->description;
        $product->content = $request->content;
        $product->category_id = $request->category_id;
        $product->vendor_id = $request->vendor_id;
        $product->save();
        

        $product->tags()->sync($request->tags, false);

        // $product_image = GalleryProduct::where('product_id', null)->get();
        // foreach ($product_image as $key => $image) {
        //     $image->product_id = $product->id;
        //     $image->save();
        // }
        
        if ($request->hasFile('images')) {
            foreach ($request->images as $file) {
                $image = new GalleryProduct();
                $image->product_id = $product->id;
                $image->link = 'storage/images/' . $file->getClientOriginalName();
                $image->save();

                // Or any custom name as the third argument
                Storage::putFileAs('public/images', $file, $file->getClientOriginalName());
            }
            
        }
        
        // $image = new GalleryProduct();
        // $image->link = $request->link;
        // $image->product_id = $product->id;
        // $image->save();

        for ($i=0; $i < count($request->quantity); $i++) { 
            $product_detail = new ProductDetail();
            $product_detail->product_id = $product->id;
            $product_detail->color_id = $request->color_id[$i];
            $product_detail->size_id = $request->size_id[$i];
            $product_detail->quantity = $request->quantity[$i];
            if ($request->has('discount')) {
                $product_detail->discount = $request->discount[$i];
            }
            $product_detail->save();
        }
        

  
        Session::flash('success', 'Created Product Success');

        return redirect('admin/home');
    }

    public function storeDetail(Request $request, $id)
    {
        $product_id = $request->id ?: 'NULL';
        $request->validate([
            'quantity' => 'required|min:0',
            'size_id'  =>  'required|unique:product_details,size_id,color_id,NULL,id,product_id,'.$id,
        ]);
        $product_detail = new ProductDetail();
        $product_detail->product_id = $id;
        $product_detail->size_id = $request->size_id;
        $product_detail->color_id = $request->color_id;
        $product_detail->quantity = $request->quantity;
        if ($request->has('discount')) {
            $product_detail->discount = $request->discount;
        }

        $product_detail->save();
        Session::flash('success', 'Created Product Detail Success');

        return response()->json([
            'success' => ' Create Product successfully'

        ]);
    }

    public function storeImages(Request $request, $id)
    {
        $images =$request->image;

        for ($i=0; $i < count($images)  ; $i++) { 
            $image = new GalleryProduct();
            $image->product_id = $id;
            $image->link = 'storage/images/' .$images[$i]->getClientOriginalName();
            $image->color_id = $request->color_id;
            $image->save();


            // Or any custom name as the third argument
            Storage::putFileAs('public/images', $images[$i], $images[$i]->getClientOriginalName());
        }
            
            
    
        
        Session::flash('success', 'Created Product Detail Success');

        return response()->json([
            'success' => ' Create Product successfully'

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responses
     */
    public function show($id)
    {   
        $product = Product::with(['gallery_products','product_details', 'vendor'])->find($id);
        $colors = ProductDetail::where('product_id', $product->id)
        ->join('colors', 'product_details.color_id', '=', 'colors.id')->select('colors.code_color','colors.id as color_id', 'product_details.product_id')->distinct('color_id')->get();

        $sizes = ProductDetail::where('product_id', $product->id)
        ->join('sizes', 'product_details.size_id', '=', 'sizes.id')->select('sizes.name','sizes.id as size_id', 'product_details.product_id')->distinct('size_id')->orderBy('size_id', 'desc')->get();
        ;
        $vendor = Vendor::find($product->vendor_id);
        $quantity = ProductDetail::select('quantity')->where('product_id', $product->id)->sum('quantity');

        return response()->json([
            'product' => $product,
            'colors' => $colors,
            'sizes' => $sizes,
            'vendor' => $vendor,
            'quantity' => $quantity,
        ]);
    }

     public function showDetail($id)
    {   
        $product = ProductDetail::with('size', 'color')->find($id);

        return $product;
    }


      public function showImages($id)
    {   
        $images = GalleryProduct::where('product_id', $id)->get();
        return $images;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return  Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->product_code = $request->product_code;
        $product->slug = $request->slug;
        $product->original_price = ProductsController::strToInt($request->original_price);
        $product->price = ProductsController::strToInt($request->price);
        $product->description = $request->description;
        $product->content = $request->content;
        $product->category_id = $request->category_id;
        $product->vendor_id = $request->vendor_id;
        $product->save();

        Session::flash('success', 'Updated Product Detail Success');

        return response()->json([
            'success' => ' Updateds Product successfully'

        ]);
    }


     public function updateDetail(Request $request, $id)
    {
        $product = ProductDetail::find($id);
        $product->quantity = $request->quantity;
        $product->color_id = $request->color_id;
        $product->size_id = $request->size_id;
        $product->discount = $request->discount;
        $product->save();

        Session::flash('success', 'Edit Post Success');

        return response()->json([
            'success' => 'Update Success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $product = Product::find($id);
        $images = $product->gallery_products;
        ProductDetail::where('product_id', $id)->delete();
        if (count($images) >0 ) {
           foreach ($images as $image) {

                Storage::delete($image->link);
                GalleryProduct::where('link', $image->link)
                ->where('product_id', $id)->delete();
            }
        }
        $product->delete();
        Session::flash('success', 'Delete Post Success');

        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }

     public function destroyDetail($id)
    {   
        $product = ProductDetail::find($id);
        $product->delete();
        Session::flash('success', 'Delete Post Success');

        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }

       public function destroyImages($id)
    {   
        $image = GalleryProduct::find($id);
        Storage::delete($image->link);
        $image->delete();
        Session::flash('success', 'Delete Image Success');

        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }
       

    public function uploadImg(Request $request){
        $dir  = public_path().'/images/';
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            if ($files) {
                $imageName = $files->getClientOriginalName();
                $files->move($dir, $imageName);
                $path = 'images/' .$imageName;
                $images = GalleryProduct::all();
                if (count($images) > 0) {
                    foreach ($images as $image) {
                        if ( ($image->product_id != null && $image->link != $path)) {
                            echo "Có tồn tại rồi mà đường dẫn khác";
                            $product_image  = new GalleryProduct();
                            $product_image->link = $path;
                            $product_image->save();
                            break;
                            
                        }elseif ($image->product_id != null && $image->link == $path) {
                            echo "Trùng đường dẫn  "; 
                            break;
                        }
                        elseif ($image->link != $path || $image->link == $path) {
                            echo "Chưa tồn tại và không trùng đường dẫn ";
                            $product_image  = new GalleryProduct();
                            $product_image->link = $path;
                            $product_image->save();
                            break;
                        }
                        
                    }
                }else{
                    $product_image  = new GalleryProduct();
                    $product_image->link = $path;
                    $product_image->save();
                     return 'Done';
                }
            }
            
        }
       
    }

    public function convert_slug($name){
        $slug = str_slug($name, $separator = '-');
        return $slug;
    }

    public function getIndex(){
        return view('admin.products.index');
    }

     public function getList()
    {
        // $min = GalleryProduct::select('gallery_products.id')
        // ->join('products', 'gallery_products.product_id', 'products.id')
        // ->orderBy('gallery_products.id')->limit(1)->first();
        // $products = Product::select('products.id','products.name','products.product_code', 'products.original_price','products.price','colors.name as color', 'sizes.name as size', 'gallery_products.link', 'gallery_products.id as gid','product_details.quantity')
        // ->join('product_details', 'product_details.product_id', '=','products.id')
        // ->join('gallery_products', 'products.id' ,'=', 'gallery_products.product_id')
        // ->join('sizes', 'product_details.color_id' ,'=', 'sizes.id')
        // ->join('colors', 'product_details.size_id' ,'=', 'colors.id')
        // ->having('gid','=' ,$min->id)
        // ->orderBy('products.id', 'desc');
        $products = Product::select('products.id','products.name','products.product_code', 'products.original_price','products.price')
        ->orderBy('products.id', 'desc');


        return datatables()->eloquent($products)
        ->addColumn('action', function($product){
            return "<button class='btn btn-info btn-sm btn-detail' data-id ='".$product->id."'><span class='glyphicon glyphicon-info-sign'></span>
            </button><button class='btn btn-primary btn-sm btn-show' data-id ='".$product->id."'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span><button class='btn btn-success btn-sm btn-images' data-id ='".$product->id."'><span class='glyphicon glyphicon-picture'></span>
            </button></button><button data-id='".$product->id."' class='btn btn-warning btn-sm btn-flat btn-edit'><span class='  glyphicon glyphicon-edit' aria-hidden='true'></span></button><button data-id='".$product->id."' class='btn btn-sm btn-danger btn-del'><span class='  glyphicon glyphicon-trash' aria-hidden='true'></span></button>";

        })
        ->editColumn('original_price',function($product){
            return number_format($product->original_price);
        })
        ->editColumn('price',function($product){
            return number_format($product->price);
        })
        ->addColumn('link', function($product){
            if(isset($product->gallery_products[0])){
                return "<img class='img-fluid' src =' ".asset($product->gallery_products[0]->link)."' style='width: 80px; height: auto;'>";
            }else{
                return "<img class='img-fluid' src =' ".asset('storage/images/no_image.png')."' style='width: 80px; height: auto;'>";
            }
            
        })
        ->rawColumns(['action', 'link'])
        ->toJson()
        ;
    }


     public function getListDetail($id)
    {
        $products = ProductDetail::select('products.id','products.name','products.product_code','colors.name as color', 'sizes.name as size','product_details.quantity', 'product_details.id as pd_id', 'product_details.color_id')
        ->join('products', 'product_details.product_id', '=','products.id')
        ->join('sizes', 'product_details.size_id' ,'=', 'sizes.id')
        ->join('colors', 'product_details.color_id' ,'=', 'colors.id')
        ->where('products.id','=',$id)
        ->orderBy('products.id', 'desc');

 


        return datatables()->eloquent($products)
        ->addColumn('action', function($product){
            return "<button class='btn btn-primary btn-sm btn-show' data-id ='".$product->pd_id."'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>
                </button><button data-id='".$product->pd_id."' class='btn btn-warning btn-sm btn-flat btn-edit-detail'><span class='  glyphicon glyphicon-edit' aria-hidden='true'></span></button><button data-id='".$product->pd_id."' class='btn btn-sm btn-danger btn-del-detail'><span class='  glyphicon glyphicon-trash' aria-hidden='true'></span></button>";

        })
        ->rawColumns(['action'])
        ->toJson()
        ;
    }

    public static function strToInt($str){
        return (int)preg_replace("/([^0-9\\.])/i", "", $str);
    }

}
