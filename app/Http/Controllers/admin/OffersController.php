<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $items = Offer::paginate(10);
        return view('offers.index',compact('items')); 
    }

 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Offer::findOrFail($id);
        return view('offers.show',compact('item')); 
    }




    public function destroy($id)
    {
        $item=Offer::find($id);

        $item->delete();

        return back();
    }
}
