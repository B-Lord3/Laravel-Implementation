<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;
use Session;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders =  Product::orderBy('created_at','asc')->paginate(10);
        return view('products.order')->with('orders', $orders);;
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
        $order = new order;
        
        $cardValidation  = request('credit_card');
        $id = request('id'); 
        if($cardValidation === "4111 1111 1111 1111"){
            return redirect()->action('ProductsController@error', [$id]);
        }
        elseif($cardValidation === "5105 1051 0510 5100"){
            $order->name = request('customer_name');
            $order->email = request('customer_email');
            $order->creditCard = request('credit_card');
            $order->status = request('order_staus');
            $order->save();
            $id = request('id');
        return redirect()->action('ProductsController@thanksPage', [$id]);
        }
        else{
            return redirect('/');
        }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
