<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Order::paginate(10);
        return view('orders.index',compact('items')); 
    }

 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Order::findOrFail($id);
        return view('orders.show',compact('item')); 
    }




    public function destroy($id)
    {
        $item=Order::find($id);

        $item->delete();

        return back();
    }
}
