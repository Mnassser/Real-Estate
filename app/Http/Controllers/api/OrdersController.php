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

class OrdersController extends Controller 
{

public function index_order(Request $request){

    $orders = $request->user()->orders()->paginate(10);
        return apiresponse(1,'done',[
            'order'=>$orders,
            

        ]);
}
        public function single_order(Request $request){
            $validate = Validator::make($request->all(),[

        
        'id' => 'required|integer',
        
    ]);
        if($validate->fails()){

           return response($validate->errors());
        }
    $orders = $request->user()->orders()->where('id',$request->id)->get();
        return apiresponse(1,'done',[
            'order'=>$orders,
            

        ]);
}
public function create_order(Request $request){

    $validate = Validator::make($request->all(),[

        'title' => 'required|max:255',
        'notice' => 'required',
        'category_id'=>'required',
        'rooms' => 'required|integer',
        'space' => 'required|integer',
        'price' => 'required|integer',
        'city_id' => 'required|integer',

    ]);
        if($validate->fails()){

           return response($validate->errors());
        }
        
        $order = $request->user()->orders()->create($request->all());
        
        return apiresponse(1,'done',[
            'order'=>$order,
            

        ]);

        }
        public function update_order(Request $request){

    $validate = Validator::make($request->all(),[

        'id' => 'required|integer',
        'title' => 'required|max:255',
        'notice' => 'required',
        'category_id'=>'required',
        'rooms' => 'required|integer',
        'space' => 'required|integer',
        'price' => 'required|integer',
        'city_id' => 'required|integer',

    ]);
        if($validate->fails()){

           return response($validate->errors());
        }
        
        $order = $request->user()->orders()->find($request->id)->update([
            'title' => $request->title,
            'notice' => $request->notice,
            'category_id'=>$request->category_id,
            'rooms' => $request->rooms,
            'space' => $request->space,
            'price' =>$request->price ,
            'city_id' =>$request->city_id,
            ]);
        
        return apiresponse(1,'The Data Has been Updated');

        }
        

       public function delete_order(Request $request)
    {
         $order = $request->user()->orders()->find($request->id);

        $order->delete();

        return apiresponse(1,'deleted');
    }


        }
        


?>
