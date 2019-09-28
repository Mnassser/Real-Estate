<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Model\Client;
use Illuminate\Support\Facades\Validator;
use App\Model\Government;
use App\Model\City;
use App\Model\Order;
use App\Model\Clientable;
use App\Model\Notification;
use App\Model\Token;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

public function login(Request $request){


    $validate = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
    ]);
         if($validate->fails()){

           return response($validate->errors());
        }
        $client=Client::where('email','=',$request->email)->first();
        
        if($client){
            if(Hash::check($request->password,$client->password)){


            return apiresponse(1,'logged in',$client);
            return auth()->gaurd('api')->validate($request->all());

            }
            else{

                return apiresponse(0,'wrong password',null);
            }


            }
            else{
                return apiresponse(0,'this phone is not exiests ',null);
            }
        }
        public function register(Request $request){

             $validate = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:clients',
            'phone'=>'required',
            'password'=>'required|confirmed',
            'city_id'=>'required',
            
    ]);
         if($validate->fails()){

           return response($validate->errors());
        }

        $request->merge(['password' => bcrypt($request->password)]);
        $client = Client::create($request->all());
        $client->api_token = str_random(60);
        $client->save();
        return apiresponse(1,'done',[
            'api_token'=>$client->api_token,
            'client'=>$client,

        ]);

        }
        public function update(Request $request){

             $validate = Validator::make($request->all(),[
            'name'=>'required',
            //'email'=>'required|unique:clients',
            'phone'=>'required',
            'password'=>'required|confirmed',
            'city_id'=>'required',
            
    ]);
         if($validate->fails()){

           return response($validate->errors());
        }

        $request->merge(['password' => bcrypt($request->password)]);
        $client = $request->user()->update($request->all());
        //$client->api_token = str_random(60);
        
        return apiresponse(1,'done',[
           
            'client'=>$client,

        ]);

        }
}
?>





