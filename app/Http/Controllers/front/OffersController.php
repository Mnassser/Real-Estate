<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\City;
use App\Model\Offer;
class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Offer::where('client_id',auth('client')->user()->id)->paginate(20);

        return view('/test/offers/index',compact('items'));
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
        return view('/test/offers/create',compact(['categories','cities']));
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
        $post=auth('client')->user()->offers()->create([
            'title' =>$request->title,
            'category_id' => $request->category_id,
            'notice' =>$request->notice,
            'rooms' =>$request->rooms,
            'price' => $request->price,
            'city_id' => $request->city_id,
            'space' =>$request->space,
            'pictures' =>implode('|',$pictures),
        ]);
        
    }
        return redirect('/test/offers');
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
        $item = Offer::where('client_id',auth('client')->user()->id)->findOrFail($id);

        return view('/test/offers/show',compact('item'));
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
         $item = Offer::where('client_id',auth('client')->user()->id)->findOrFail($id);
         $categories = Category::all();
         $cities = City::all();
         

        return view('/test/offers/edit', compact(['item','categories','cities']));
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
        $item = Offer::findOrFail($id);//Get role with the given id
      
                  $validate=$request->validate([

        'title' => 'required|max:255',
        'notice' => 'required',
        'category_id'=>'required',
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
        $post=auth('client')->user()->offers()->update([
            'title' =>$request->title,
            'category_id' => $request->category_id,
            'notice' =>$request->notice,
            'rooms' =>$request->rooms,
            'price' => $request->price,
            'city_id' => $request->city_id,
            'space' =>$request->space,
            'pictures' =>implode('|',$pictures),
        ]);
        
    }
        return redirect('/test/offers');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item = Offer::find($id);

        $item->delete();

        return redirect('/test/offers');
    }
}
