<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Client;
use App\Model\Government;
use App\Model\City;
use Session;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function index()
    {
        //
    }

    *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     
   */ 
    public function create()
    {
        
        $cities = City::all();


        return view('test/signup',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data= $this->validate($request, [
        'name'=>'required',
        'email'=>'required|unique:clients',
        'phone'=>'required|unique:clients',
        'password'=>'required|confirmed',   
        'city_id'=>'required',

    ]);
        
        $request->merge(['password' => bcrypt($request->password)]);
        $client = Client::create($request->all());
        $client->api_token = str_random(60);
        $client->save();
            if (Auth::guard('client')->attempt($request->only('email', 'password'))){
                                    
            return redirect('/test')->with('info',
             'Logged In');
    }
    return redirect('/test')->with('info',
             'تم التسجيل');
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $client = Client::findOrFail(auth('client')->user()->id);
         $data= $this->validate($request, [
        'name'=>'required',
        'email'=>'required|unique:clients',
        'phone'=>'required|unique:clients',
        'password'=>'sometimes',   
        'city_id'=>'required',

    ]);
        
        
        $client->update($request->all());
        $client->save();
            if (Auth::guard('client')->attempt($request->only('email', 'password'))){
                                    
            return back();
    }
    return back();
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
       
        return view('/test/login');
        
    }
    public function check(Request $request){

       

    $validate = $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
    ]);
         
        $client=Client::where('email',$request->email)->first();
        
        if($client){
            if (Auth::guard('client')->attempt($request->only('email', 'password'))){
                                    
            return redirect('/test')->with('info',
             'Logged In');
            //return auth()->gaurd('api')->validate($request->all());

            }
                
            return redirect('/test/login')
            ->with('error',
             'Wrong Password');

            }
            else{
            return redirect('/test/login')
               ->with('error',
             'wrong email');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
