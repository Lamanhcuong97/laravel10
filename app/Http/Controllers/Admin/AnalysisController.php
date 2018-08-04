<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bill;
use App\Order;
use Carbon\Carbon;

class AnalysisController extends Controller
{
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

    public function search(Request $request){
    	
    	if ($request->has('day_month_year')) {
    		$bills = Bill::select('*')->where('created_at', 'LIKE', $request->day_month_year.'%')->get();
    		$search = $request->day_month_year;
    		$total = 0;
    		$number_products = 0;
    		foreach ($bills as $bill) {
    			$total += $bill->total;
    			$products = Order::where('bill_id', $bill->id)->get();
    			foreach ($products as $product) {
    				$number_products += $product->quantity;
    			}
    		}
    		return view('admin.analysis.index', compact('total','number_products','search'));
    		
    	}elseif ($request->has('month_year')) {
    		$bill = Bill::select('*')->where('created_at', 'LIKE', $request->month_year.'%')->get();
    		$total = 0;
    		$search = $request->month_year;
    		$number_products = 0;
    		foreach ($bills as $bill) {
    			$total += $bill->total;
    			$products = Order::where('bill_id', $bill->id)->get();
    			foreach ($products as $product) {
    				$number_products += $product->quantity;
    			}
    		}
    		return view('admin.analysis.index', compact('total','number_products','search'));
    	}elseif($request->has('year')){
    		$bill = Bill::select('*')->where('created_at', 'LIKE', $request->year.'%')->get();
    		$total = 0;
    		$search = $request->year;
    		$number_products = 0;
    		foreach ($bills as $bill) {
    			$total += $bill->total;
    			$products = Order::where('bill_id', $bill->id)->get();
    			foreach ($products as $product) {
    				$number_products += $product->quantity;
    			}
    		}
    		return view('admin.analysis.index', compact('total','number_products','search'));
    	}else{
    		return redirect()->back();
    	}
    }

    public function analysis_products(){
    	$products_in_month =  array();
    	$year = Carbon::now()->format('Y');
    	for ($i= 1 ; $i <=  12  ; $i++) { 
    		if ($i < 10) {
    			$bills = Bill::select('*')->where('created_at', 'LIKE', $year.'-0'.$i.'%')->get();
				$number_products = 0;
				foreach ($bills as $bill) { 
					$products = Order::where('bill_id', $bill->id)->get();
					foreach ($products as $product) {
						$number_products += $product->quantity;
					}
				}
				
    		}else{
    			$bills = Bill::select('*')->where('created_at', 'LIKE', $year.'-'.$i.'%')->get();
				$number_products = 0;
				foreach ($bills as $bill) { 
					$products = Order::where('bill_id', $bill->id)->get();
					foreach ($products as $product) {
						$number_products += $product->quantity;
					}
				}
				
    		}
			$products_in_month[$i] = $number_products;

    	}
    	return view('admin.analysis.analysis_product',compact('products_in_month'));
    }
}
