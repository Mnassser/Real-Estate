<?php 

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Model\Product;
use Illuminate\Support\Facades\Validator;
use App\Model\Government;
use App\Model\City;
use App\Model\Category;
use App\Model\Order;
use App\Model\Offer;
use App\Model\Clientable;
use App\Model\Notification;
use App\Model\Token;
use App\Http\Controllers\Controller;

class MainController extends Controller 
{


public function products_list(){

    $products = Product::paginate(10);
        return apiresponse(1,'done',[
            'order'=>$products,
            

        ]);
}


public function single_product(Request $request){

    $product = Product::find($request->id);
        return apiresponse(1,'done',[
            'order'=>$product,
            

        ]);
}
public function government_list(){

    $items = Government::all();
        return apiresponse(1,'done',[
            'order'=>$items,
            

        ]);
}
public function city_list(){

    $items = City::all();
        return apiresponse(1,'done',[
            'order'=>$items,
            

        ]);
}
public function category_list(){

    $items = Category::all();
        return apiresponse(1,'done',[
            'order'=>$items,
            

        ]);
}


}
?>
