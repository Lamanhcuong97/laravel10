<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\Http\Requests\CheckOutRequest;
use App\Bill;
use App\Order;
use App\Color;
use App\Size;
use App\ProductDetail;
use Auth;
use Toastr;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Remove the specified resource from storage.s
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return response()->json([
            'success' => 'Dekete cart Succesful'
        ]);
    }


    public function addCart(Request $request){          
        $product = ProductDetail::where(
        [
            ['product_id' , $request->id],
            ['color_id' , $request->color_id],
            ['size_id' , $request->size_id],
        ])->first();
        if ($product->quantity >= $request->qty) {
            $product = Product::with(['gallery_products','product_details', 'vendor'])->find($request->id);
            $color = Color::find($request->color_id);
            $size = Size::find($request->size_id);
            $cart = Cart::add(array('id' => $product->id, 'name' => $product->name, 'qty' => $request->qty, 'price' => $product->price,'options' => ['link' => $product->gallery_products[0]->link, 'slug' => $product->slug,'size_name' => $size->name,'code_color' => $color->code_color, 'color_id' => $request->color_id,'size_id' => $request->size_id]))->associate('App\Product');
            return response()->json([
                'success' => 'Add To cart Succesful'
            ]);
        }else{
             
            return response()->json([
                'error' => 'Số lượng sản phẩm không đủ'
            ]);

        }
            
    }

    public function minus(Request $request)
    {   
        $cart = Cart::get($request->rowId);
        
        if($cart->qty >1){
            Cart::update($request->rowId, $cart->qty -1);
        }
       
        return response()->json([
            'success' => 'Minus quantity Succesfully'
        ]);
    }

    public function plus(Request $request)
    {
        $cart = Cart::get($request->rowId);
        $product = ProductDetail::where(
            [
                ['product_id' , $cart->id],
                ['color_id' , $cart->options->color_id],
                ['size_id' , $cart->options->size_id],
            ])->first();
        if ($product->quantity > $cart->qty + 1) {
            Cart::update($request->rowId,$cart->qty + 1);
        }else{
             
                Toastr::error('Số lượng trong kho không đủ');
            
        }
        return response()->json([
            'success' => 'Plus quantity Succesfully'
        ]);
    }


     public function clear()
    {
        Cart::destroy();
        return response()->json([
            'success' => 'Clear Cart Succesfully'
        ]);
    }

    public function checkout(CheckOutRequest $request){
        $bill = new Bill();
        $bill->customer_name = $request->name;
        $bill->customer_address = $request->address;
        $bill->customer_phone = $request->phone_number;
        $bill->email = $request->email;
        $bill->status = 1;
        $bill->total = CartsController::extract_numbers(Cart::total(0));
        if (Auth::user() !=null) {
            $bill->customer_id = Auth::id();
        }

        if ($request->has('coupon_code')) {
            $bill->promotion_code = $request->coupon_code;
        }
        $bill->save();
        $interest = 0;
        foreach (Cart::content() as $cart) {
            $color_id =  $cart->options->color_id;
            $size_id =  $cart->options->size_id;
            $detail = ProductDetail::where([
                ['color_id','=', $color_id],
                 ['size_id','=', $size_id],
                 ['product_id','=', $cart->id],
                ])
            ->first();
            $product = Product::find($cart->id);
            $bill->interest = $cart->price -  $product->original_price*$cart->qty;
            $bill->save();
            $order = new Order();
            $order->bill_id = $bill->id;
            $order->product_detail_id = $detail->id;
            $order->price = $cart->price;
            $order->quantity = $cart->qty;
            $order->save();
            // Minus quantity
            $detail->quantity = $detail->quantity - $cart->qty;
            $detail->save();


        }
        Cart::destroy();
        return redirect('/');
    }

    public static function extract_numbers($string){
        return preg_replace("/[^0-9]/", '', $string);
    }

}
