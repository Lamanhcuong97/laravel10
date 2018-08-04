<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bill;
use App\Order;
use App\GalleryProduct;
use App\ProductDetail;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Order::where('bill_id', $id)->get();
        foreach ($orders as $order) {
            $product_detail = ProductDetail::where('id', $order->product_detail_id)->first();
            $product_detail->quantity += $order->quantity;
            $product_detail->save();
            $order->delete();
        }
        
        Bill::find($id)->delete();
        return response()->json([
            'success' => 'Bill Canceled'
        ]);
    }

      public function getList()
    {
        $orders = Bill::select('bills.*')
        ->orderBy('id', 'desc');


        return datatables()->eloquent($orders)
        ->addColumn('action', function($order){
            return "<button class='btn btn-info btn-sm btn-list-order' data-id ='".$order->id."'><span class='glyphicon glyphicon-list-alt'></span><span class= 'para-list'>list</span><button class='btn btn-warning btn-sm btn-accept' data-id ='".$order->id."'><span class='glyphicon glyphicon-list-alt'></span><span class= 'para-list'>accept</span>
            </button>
            </button><button data-id='".$order->id."' class='btn btn-sm btn-danger btn-cancel-order'><span class='  glyphicon glyphicon-trash' aria-hidden='true'></span><span class= 'para-cancel'>cancel</span></button>";

        })
        ->editColumn('total',function($order){
            return number_format($order->total);
        })

        ->editColumn('status',function($order){
            if ($order->status == 1) {
                return 'Order not accepted';
            }elseif ($order->status == 2) {
                return 'Order accepted';
            }elseif ($order->status == 3) {
                return 'Received';
            }else{
                return 'Order canceled';
            }
        })
       
        
        ->rawColumns(['action', 'link'])
        ->toJson()
        ;
    }

     public function getListProduct($id)
    {
        $orders = Order::select('sizes.name as size','product_details.size_id', 'product_details.id','product_details.color_id','orders.quantity','products.name', 'products.product_code', 'colors.code_color', 'products.id as p_id', 'products.price')
        ->join('product_details','product_details.id', '=','orders.product_detail_id')
        ->join('colors','colors.id', '=','product_details.color_id')
        ->join('sizes','sizes.id', '=','product_details.size_id')
        ->join('products','products.id', '=','product_id')
        ->where('bill_id', $id)
        ->orderBy('id', 'desc');

        
        return datatables()->eloquent($orders)
       
        ->editColumn('color',function($order){
           return "<div id='code_color' style ='background:".$order->code_color.";'> </div>";
        })
        ->editColumn('price',function($order){
            return number_format($order->price);
        })
       
        ->addColumn('thumbnail', function($order){
            $image = GalleryProduct::where('product_id', $order->p_id)->first();
            if(isset($image)){
                return "<img class='img-fluid' src =' ".asset($image->link)."' style='width: 80px; height: auto;'>";
            }else{
                return "<img class='img-fluid' src =' ".asset('storage/images/no_image.png')."' style='width: 80px; height: auto;'>";
            }
            
        })


        ->rawColumns(['action', 'thumbnail', 'color'])
        ->toJson()
        ;
    }


}
