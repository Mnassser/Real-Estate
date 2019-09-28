<?php 

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Model\Client;
use Illuminate\Support\Facades\Validator;
use App\Model\Government;
use App\Model\City;
use App\Model\Order;
use App\Model\Offer;
use App\Model\Clientable;
use App\Model\Notification;
use App\Model\Token;
use App\Http\Controllers\Controller;

class OffersController extends Controller 
{


public function index_offer(Request $request){

    $offers = $request->user()->offers()->paginate(10);
        return apiresponse(1,'done',[
            'order'=>$offers,
            

        ]);
}
        public function single_offer(Request $request){
            $validate = Validator::make($request->all(),[

        
        'id' => 'required|integer',
        
    ]);
        if($validate->fails()){

           return response($validate->errors());
        }
    $offer = $request->user()->offers()->where('id',$request->id)->get();
        return apiresponse(1,'done',[
            'order'=>$offer,
            

        ]);
}




public function create_offer(Request $request){

    $validate = Validator::make($request->all(),[

        'title' => 'required|max:255',
        'notice' => 'required',
        'category_id'=>'required',
        'pictures'=>'sometimes|max:5000',
        'rooms' => 'required|integer',
        'space' => 'required|integer',
        'price' => 'required|integer',
        'city_id' => 'required|integer',

    ]);
        if($validate->fails()){

           return response($validate->errors());
        }
        
        if($validate){
           $pictures=array();
             $files=$request->file('pictures');
            foreach($files as $file){
            $name=$file->getClientOriginalName();
        
            $file->move('pictures',$name);
            $pictures[]=$name;
        }
        $offer=$request->user()->offers()->create([
            'title' =>$request->title,
            'category_id' => $request->category_id,
            'notice' =>$request->notice,
            'rooms' =>$request->rooms,
            'price' => $request->price,
            'city_id' => $request->city_id,
            'space' =>$request->space,
            'pictures' =>implode('|',$pictures),
        ]);
        
        return apiresponse(1,'done',[
            'offer'=>$offer,
            

        ]);

        }
    }

        public function update_offer(Request $request){

    $validate = Validator::make($request->all(),[

        'id' => 'required|integer',
        'title' => 'required|max:255',
        'notice' => 'required',
        'category_id'=>'required',
        'pictures'=>'sometimes|max:5000',
        'rooms' => 'required|integer',
        'space' => 'required|integer',
        'price' => 'required|integer',
        'city_id' => 'required|integer',

    ]);
        if($validate->fails()){

           return response($validate->errors());
        }
        
      /* if($validate){
             $pictures=array();
            foreach($files as $file){
            $name=$request->pictures;
        
            move('pictures',$pictures);
            $pictures[]=$name;
        }*/
        $offer=$request->user()->offers()->find($request->id)->update([
            'title' =>$request->title,
            'category_id' => $request->category_id,
            'notice' =>$request->notice,
            'rooms' =>$request->rooms,
            'price' => $request->price,
            'city_id' => $request->city_id,
            'space' =>$request->space,
            'pictures' =>$request->pictures,
        ]);
        
        return apiresponse(1,'done',[
            
            'offer'=>$offer,

        ]);

        //}
    }

       public function delete_offer(Request $request)
    {
         $order = $request->user()->offers()->find($request->id);

        $order->delete();

        return apiresponse(1,'deleted');
    }


        }
        


?>
