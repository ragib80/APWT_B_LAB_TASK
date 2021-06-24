<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class SalesController extends Controller
{
  
    public function index()
    {
        return view('sales.index');
       
    }

   
    public function physical()
    {

        $sales_today = Product::where('status', 'sold')
            ->where('channel', 'physical')
            ->where('date_sold', Carbon::now()->toDateString())
            ->count();

        $sales_week = Product::where('status', 'sold')
            ->where('channel', 'physical')
            ->whereBetween('date_sold', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->count();
        $avg_sales = Product::where('status', 'sold')
            ->where('channel', 'physical')
            ->whereYear('date_sold', Carbon::now()->year)
            ->whereMonth('date_sold', Carbon::now()->month)
            ->avg('quantity');

        $most_sales = Product::select('product_name')
            ->where('channel', 'physical')
            ->groupBy('product_name')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(1)
            ->get();


        $product = DB::table('products')
            ->where('channel', 'physical')
            ->orderBy('date_sold', 'desc')
            ->get();

        return view('sales.physical')->with('productList', $product)
            ->with('sales_today', $sales_today)
            ->with('sales_week', $sales_week)
            ->with('avg_sales', $avg_sales)
            ->with('most_sales', $most_sales);
    }

    public function social()
    {

        $sales_today = Product::where('status', 'sold')
            ->where('channel', 'social')
            ->where('date_sold', Carbon::now()->toDateString())
            ->count();

        $sales_week = Product::where('status', 'sold')
            ->where('channel', 'social')
            ->whereBetween('date_sold', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->count();
        $avg_sales = Product::where('status', 'sold')
            ->where('channel', 'social')
            ->whereYear('date_sold', Carbon::now()->year)
            ->whereMonth('date_sold', Carbon::now()->month)
            ->avg('quantity');

        $most_sales = Product::select('product_name')
            ->where('channel', 'social')
            ->groupBy('product_name')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(1)
            ->get();


        $product = DB::table('products')
            ->where('channel', 'social')
            ->orderBy('date_sold', 'desc')
            ->get();

        return view('sales.social')->with('productList', $product)
            ->with('sales_today', $sales_today)
            ->with('sales_week', $sales_week)
            ->with('avg_sales', $avg_sales)
            ->with('most_sales', $most_sales);
    }
    public function ecommerce()
    {

        $sales_today = Product::where('status', 'sold')
            ->where('channel', 'ecommerce')
            ->where('date_sold', Carbon::now()->toDateString())
            ->count();

        $sales_week = Product::where('status', 'sold')
            ->where('channel', 'ecommerce')
            ->whereBetween('date_sold', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->count();
        $avg_sales = Product::where('status', 'sold')
            ->where('channel', 'ecommerce')
            ->whereYear('date_sold', Carbon::now()->year)
            ->whereMonth('date_sold', Carbon::now()->month)
            ->avg('quantity');

        $most_sales = Product::select('product_name')
            ->where('channel', 'ecommerce')
            ->groupBy('product_name')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(1)
            ->get();


        $product = DB::table('products')
            ->where('channel', 'ecommerce')
            ->orderBy('date_sold', 'desc')
            ->get();

        return view('sales.ecommerce')->with('productList', $product)
            ->with('sales_today', $sales_today)
            ->with('sales_week', $sales_week)
            ->with('avg_sales', $avg_sales)
            ->with('most_sales', $most_sales);
    }

    public function sales()
    {

        return view('sales.physical');
    }

    
    public function store(ProductRequest $req)
    {

        $product = new Product;
        $product->customer_name = $req->fullname;
        $product->address = $req->address;
        $product->phone = $req->phone;
        $product->product_name = $req->productname;
        $product->product_id = $req->productid;
        $product->quantity = $req->quantity;
        $product->unit_price = $req->unitprice;
        $product->total_price = $req->totalprice;
        $product->status = 'pending';
        $product->payment_type = 'pending';
        $product->channel = 'physical';
        $product->date_sold = '2019/10/10';
        
        $product->save();
        $req->session()->flash('msg', 'Product Registration Successful');
        return redirect()->route('sales.physical');
    }
    
   
}