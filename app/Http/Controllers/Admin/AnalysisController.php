<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bill;
use App\Order;
use Carbon\Carbon;
use PDF;
use DB;

class AnalysisController extends Controller
{
    public $product_in_month;
    public $income_in_month;
    public $interest_in_month ;

    public function index(){
    	$product_in_month =  array();
    	$income_in_month =  array();
    	$interest_in_month = array();
    	$year = Carbon::now()->format('Y');
    	for ($i= 1 ; $i <=  12  ; $i++) { 
    		if ($i < 10) {
    			$bills = Bill::select('*')->where('created_at', 'LIKE', $year.'-0'.$i.'%')->get();
				$total = 0;
				$number_products = 0;
				$interest = 0;
				foreach ($bills as $bill) { 
					$total += $bill->total;
					$interest += $bill->interest;
					$products = Order::where('bill_id', $bill->id)->get();
					foreach ($products as $product) {
						$number_products += $product->quantity;
					}
				}
    		}else{
    			$bills = Bill::select('*')->where('created_at', 'LIKE', $year.'-'.$i.'%')->get();
				$total = 0;
				$number_products = 0;
				foreach ($bills as $bill) { 
					$total += $bill->total;
					$products = Order::where('bill_id', $bill->id)->get();
					foreach ($products as $product) {
						$number_products += $product->quantity;
					}
				}
    		}
			$product_in_months[$i] = $number_products;
			$income_in_month[$i] = $total;
			$interest_in_month[$i] = $interest;
    	}
    	return view('admin.analysis.index',compact('product_in_months','income_in_month','interest_in_month'));
    }

    public function analysis_day_month(){
         return view('admin.analysis.analysis_month_day');
    }

    public function searchYear(Request $request){
        $number_product_year= 0;
        $income_year= 0;
        $interest_year= 0;
        $search = $request->year;
    	
    	if($request->has('year')){
    		$product_in_month =  array();
            $income_in_month =  array();
            $interest_in_month = array();
            $year = $request->year;
            for ($i= 1 ; $i <=  12  ; $i++) { 
                if ($i < 10) {
                    $bills = Bill::select('*')->where('created_at', 'LIKE', $year.'-0'.$i.'%')->get();
                    $total = 0;
                    $number_products = 0;
                    $interest = 0;
                    foreach ($bills as $bill) { 
                        $total += $bill->total;
                        $interest += $bill->interest;
                        $products = Order::where('bill_id', $bill->id)->get();
                        foreach ($products as $product) {
                            $number_products += $product->quantity;
                        }
                    }
                }else{
                    $bills = Bill::select('*')->where('created_at', 'LIKE', $year.'-'.$i.'%')->get();
                    $total = 0;
                    $number_products = 0;
                    foreach ($bills as $bill) { 
                        $total += $bill->total;
                        $products = Order::where('bill_id', $bill->id)->get();
                        foreach ($products as $product) {
                            $number_products += $product->quantity;
                        }
                    }
                }
                $number_product_year += $number_products;
                $income_year += $total;
                $interest_year += $interest;
                $product_in_months[$i] = $number_products;
                $income_in_month[$i] = $total;
                $interest_in_month[$i] = $interest;
            }
            return view('admin.analysis.index',compact('product_in_months','income_in_month','interest_in_month','number_product_year','income_year','interest_year','search'));
    	}
    }

    public function searchDayOrMonth(Request $request){
        
       
        $interest= 0;
       if ($request->month_year != null) {
            $bills = Bill::select('*')->where('created_at', 'LIKE', $request->month_year.'%')->get();
            $total = 0;
            $search = $request->month_year;
            $number_products = 0;
            foreach ($bills as $bill) {
                $total += $bill->total;
                 $interest += $bill->interest;
                $products = Order::where('bill_id', $bill->id)->get();
                foreach ($products as $product) {
                    $number_products += $product->quantity;
                }
            }
            return view('admin.analysis.analysis_month_day', compact('total','number_products','interest','search'));
        }elseif ($request->day_month_year != null) {
            $bills = Bill::select('*')->where('created_at', 'LIKE', $request->day_month_year.'%')->get();
            $search = $request->day_month_year;
            $total = 0;
            $number_products = 0;
            foreach ($bills as $bill) {
                $total += $bill->total;
                $interest += $bill->interest;
                $products = Order::where('bill_id', $bill->id)->get();
                foreach ($products as $product) {
                    $number_products += $product->quantity;
                }
            }
            return view('admin.analysis.analysis_month_day', compact('total','number_products','interest','search'));
        }
    }

    

    public function analysis_products(){
        $search = Carbon::now()->format('Y-m');

    	$products_best_seller =  DB::table('bills')->select('products.id','products.name',DB::raw('SUM(orders.quantity) as quantity'))
            ->join('orders' ,'orders.bill_id','=', 'bills.id')
            ->join('product_details' ,'product_details.id','=', 'orders.product_detail_id')
            ->join('products' , 'product_details.product_id','=','products.id')
            
            ->where('bills.created_at', 'LIKE',  $search.'%')
            ->groupBy('products.id')
            ->orderBy('quantity', 'desc')
            ->limit(10)->get(); 
            foreach ($products_best_seller as $product) {
                 $image =  DB::table('gallery_products')->select('link')->where('product_id', $product->id)->first();
                 $gallery[$product->id]= $image;
             } 
           return view('admin.analysis.analysis_product',compact('products_best_seller', 'gallery', 'search'));
    }

    public function product_best_seller(Request $request){
        
        $gallery = array();

        if ($request->year != null) {
            $search = $request->year;
            $products_best_seller =  DB::table('bills')->select('products.id','products.name',DB::raw('SUM(orders.quantity) as quantity'))
            ->join('orders' ,'orders.bill_id','=', 'bills.id')
            ->join('product_details' ,'product_details.id','=', 'orders.product_detail_id')
            ->join('products' , 'product_details.product_id','=','products.id')
            
            ->where('bills.created_at', 'LIKE',  $request->month_year.'%')
            ->groupBy('products.id')
            ->orderBy('quantity', 'desc')
            ->limit(10)->get(); 
            foreach ($products_best_seller as $product) {
                 $image =  DB::table('gallery_products')->select('link')->where('product_id', $product->id)->first();
                 $gallery[$product->id]= $image;
             } 
           return view('admin.analysis.analysis_product',compact('products_best_seller', 'gallery', 'search'));
            
        }else{
            $search = $request->month_year;
            $products_best_seller =  DB::table('bills')->select('products.id','products.name',DB::raw('SUM(orders.quantity) as quantity'))
            ->join('orders' ,'orders.bill_id','=', 'bills.id')
            ->join('product_details' ,'product_details.id','=', 'orders.product_detail_id')
            ->join('products' , 'product_details.product_id','=','products.id')
            
            ->where('bills.created_at', 'LIKE',  $request->month_year.'%')
            ->groupBy('products.id')
            ->orderBy('quantity', 'desc')
            ->limit(10)->get(); 
            foreach ($products_best_seller as $product) {
                 $image =  DB::table('gallery_products')->select('link')->where('product_id', $product->id)->first();
                 $gallery[$product->id]= $image;
             } 
            return view('admin.analysis.analysis_product',compact('products_best_seller', 'gallery', 'search'));
        }
            
        
    }

    public function generatePDF(Request $request){
        $year = $request->year;
        $number_product_year= 0;
        $income_year= 0;
        $interest_year= 0;
        for ($i= 1 ; $i <=  12  ; $i++) { 
            if ($i < 10) {
                $bills = Bill::select('*')->where('created_at', 'LIKE', $year.'-0'.$i.'%')->get();
                $total = 0;
                $number_products = 0;
                $interest = 0;
                foreach ($bills as $bill) { 
                    $total += $bill->total;
                    $interest += $bill->interest;
                    $products = Order::where('bill_id', $bill->id)->get();
                    foreach ($products as $product) {
                        $number_products += $product->quantity;
                    }
                }
            }else{
                $bills = Bill::select('*')->where('created_at', 'LIKE', $year.'-'.$i.'%')->get();
                $total = 0;
                $number_products = 0;
                foreach ($bills as $bill) { 
                    $total += $bill->total;
                    $products = Order::where('bill_id', $bill->id)->get();
                    foreach ($products as $product) {
                        $number_products += $product->quantity;
                    }
                }
            }
            $number_product_year += $number_products;
            $income_year += $total;
            $interest_year += $interest;
           
        }
        $data = array('number_product_year'=> number_format($number_product_year), 'income_year' => number_format($income_year), 'interest_year' => number_format($interest_year) ,'year' => $year);
        $pdf = PDF::loadView('admin.analysis.pdf', compact('data'));
        
        return $pdf->download('report_income_'.$year.'.pdf');
    }
}
