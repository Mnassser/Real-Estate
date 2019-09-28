<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Government;
use App\Model\City;
class GovernmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $governments=Government::all();
        return view('governments.index',compact('governments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('governments.create');
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
        'name' => 'required|unique:governments|max:255'
        
        ]);

        if($validate){

        $government = Government::create($request->all())->toSql();

        return redirect('governments');
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
                $government = Government::find($id);
                if($government != null){
        return view('governments.edit',compact('government'));
            }
            else{

                return redirect('governments');



            }
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
                
            if(Government::find($id) != null){
        $government = Government::find($id)->update($request->all());
 
        return redirect('governments');
    }
    else{
        return back();
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $government=Government::find($id);

        $government->delete();
        $city=City::where('government_id',$id);
        $city->delete();

        return redirect('governments');

    }
}
