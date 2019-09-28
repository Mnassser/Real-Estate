<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use App\Model\City;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::paginate(20);

        return view('products/index',compact('items'));
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
        return view('products/create',compact(['categories','cities']));
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
        'type'=>'required',
        'pictures'=>'sometimes|max:5000',
        'rooms' => 'required|integer',
        'space' => 'required|integer',
        'price' => 'required|integer',
        'city_id' => 'required|integer',
        ]);
        if($validate){
             $pictures=array();
             $files=$request->file('pictures');
            foreach($files as $file){
            $name=$file->getClientOriginalName();
        
            $file->move('pictures',$name);
            $pictures[]=$name;
        }
        $post=Product::create([
            'title' =>$request->title,
            'type' => $request->type,
            'notice' =>$request->notice,
            'rooms' =>$request->rooms,
            'price' => $request->price,
            'city_id' => $request->city_id,
            'space' =>$request->space,
            'pictures' =>implode('|',$pictures),
        ]);
       
        }
        return redirect('products');
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
        $item = Product::findOrFail($id);

        return view('products/show',compact('item'));
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
         $item = Product::findOrFail($id);
         $items = Category::all();
        return view('products/edit', compact(['item','items']));
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
        $product = Product::findOrFail($id);//Get role with the given id
    //Validate name and permission fields
        $this->validate($request, [
            'title' => 'required|max:255',
        'notice' => 'required',
        'image'=>'required',
        'type'=>'required',
        ]);

       $update = $product->update($request->all());

        return redirect('products')
            ->with('flash_message',
             'updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item = Product::find($id);

        $item->delete();

        return back();
    }
}
