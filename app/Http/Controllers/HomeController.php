<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductDetail;
use App\Vendor;
use App\Slider;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $product_new = Product::with(['gallery_products','product_details', 'vendor'])->select()->orderBy('created_at', 'desc')->limit(5)->get();
        $slider = Slider::all();
        return view('customer.index', compact('products', 'product_new', 'slider'));
    }

    public function show($slug){
        $product = Product::where('slug', $slug)->first();
    }

    public function product_detail($slug){
        $product = Product::with(['gallery_products','product_details', 'vendor'])->where('slug', $slug)->first();
        $colors = ProductDetail::where('product_id', $product->id)
        ->join('colors', 'product_details.color_id', '=', 'colors.id')->select('colors.code_color','colors.id as color_id', 'product_details.product_id')->distinct('color_id')->get();

        $sizes = ProductDetail::where('product_id', $product->id)
        ->join('sizes', 'product_details.size_id', '=', 'sizes.id')->select('sizes.name','sizes.id as size_id', 'product_details.product_id')->distinct('size_id')->orderBy('size_id', 'desc')->get();
        ;
        $products_related = Product::where('category_id', $product->category_id)->limit(10)->get();

        return view('customer.product', compact('product','colors','sizes', 'products_related'));
    }

     public function quickview($slug){
        $product = Product::with(['gallery_products','product_details', 'vendor'])->where('slug', $slug)->first();
        $colors = ProductDetail::where('product_id', $product->id)
        ->join('colors', 'product_details.color_id', '=', 'colors.id')->select('colors.code_color','colors.id as color_id', 'product_details.product_id')->distinct('color_id')->get();

        $sizes = ProductDetail::where('product_id', $product->id)
        ->join('sizes', 'product_details.size_id', '=', 'sizes.id')->select('sizes.name','sizes.id as size_id', 'product_details.product_id')->distinct('size_id')->orderBy('size_id', 'desc')->get();
        ;
        $vendor = Vendor::find($product->vendor_id);

        return response()->json([
            'product' => $product,
            'colors' => $colors,
            'sizes' => $sizes,
            'vendor' => $vendor,
        ]);
    }

    public function cart(){
        return view('customer.cart');
    }

    public function category(){
        return view('customer.category');
    }

    public function checkout(){
        return view('customer.checkout');
    }

    public function gallery(){
        return view('customer.gallery');
    }


    public function color_sizes(Request $request){
         $sizes = ProductDetail::where('product_id', $request->product_id )->where('color_id', $request->color_id)
        ->join('sizes', 'product_details.size_id', '=', 'sizes.id')->select('sizes.*', 'product_details.product_id')->orderBy('id', 'desc')->distinct('size_id')->get();
        return $sizes;
    }

    public function list($slug){
        if ($slug == 'men') {
            $products = Product::where('category_id', 10)->paginate(4);
            $slug = "men's";
            return view('customer.list', compact('products','slug'));
        }else{
            $products = Product::where('category_id', 11)->paginate(4);
            $slug = "women's";
            return view('customer.list', compact('products', 'slug'));
        }
        
    }

     public function about(){
        $products = Product::all();
        return view('customer.about', compact('products'));
    }
     public function contact(){
        $products = Product::all();
        return view('customer.contact', compact('products'));
    }

    public function search(Request $request){
        $products = Product::with('gallery_products')->where('name', 'LIKE', '%'.$request->search .'%')->get();
        $slug = $request->search;
        return view('customer.search', compact('products', 'slug'));
    }
    
}
