<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\City;
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
        $items = Order::where('client_id',auth('client')->user()->id)->paginate(20);

        return view('/test/orders/index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $cities = City::all();
        return view('/test/orders/create',compact(['categories','cities']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $validate=$request->validate([

        'title' => 'required|max:255',
        'notice' => 'required',
        'category_id'=>'required',
        'rooms' => 'required|integer',
        'space' => 'required|integer',
        'price' => 'required|integer',
        'city_id' => 'required|integer',
        ]);
        
        $order=auth('client')->user()->orders()->create($request->all());
       
        
        return redirect('/test/orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
        $item = Order::where('client_id',auth('client')->user()->id)->findOrFail($id);

        return view('/test/orders/show',compact('item'));
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $item = Order::where('client_id',auth('client')->user()->id)->findOrFail($id);
         $categories = Category::all();
         $cities = City::all();
         

        return view('/test/orders/edit', compact(['item','categories','cities']));
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
        $item = Order::findOrFail($id);//Get role with the given id
    //Validate name and permission fields
        $this->validate($request, [
        'title' => 'required|max:255',
        'notice' => 'required',
        'category_id'=>'required|integer',
        'rooms' => 'required|integer',
        'space' => 'required|integer',
        'price' => 'required|integer',
        'city_id' => 'required|integer',
        ]);

       $update = $item->update($request->all());

        return redirect('/test/orders');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item = Order::find($id);

        $item->delete();

        return redirect('/test/orders');
    }
}
