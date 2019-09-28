<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\City;
use App\Model\Product;
use Auth;
use Session;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(4);
        $orders = Order::paginate(4);
        $cities = City::all();
        
        return view('test/Home',compact(['orders','cities','products']));
    }
    
    public function show($id)
    {
        $item = Product::findOrFail($id);
        return view('test/show',compact('item'));
    }
        public function products()
    {
        $items = Product::paginate(20);
        return view('test/products',compact('items'));
    }
    public function profile()
    {
        $cities = City::all();

        return view('test/profile',compact('cities'));
    }
    public function contact_us()
    {
        return view('test/contact-us');
    }
    public function who_we_are()
    {
        return view('test/who-we-are');
    }
   //
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
