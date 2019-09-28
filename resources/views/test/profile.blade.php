@extends('layouts.front')
@section('content')

     <!-- breedcrumb-->

      <section id="breedcrumb">
      <div class="container">
          <div class="row some-breathing-room">
     
            <div class="col-md-6">
                <div class="call-us-div shadow">
                    <div class="div-bg"><p>الخدمات</p></div>
                    
                    <hr class="line">
                    <ul class="list-call">
                        <li><a href="/test/offers" class="btn login-btn shadow">المعروض</a></li>

                        <li><a href="/test/orders" class="btn login-btn shadow">الطلبات</a></li>
                       
                    </ul>
                    
                </div>

            </div>
            <div class="col-md-6">
                    <div class="call-us-div shadow">
                            <div class="div-bg"><p>اعدادات الحساب</p></div>
                            <!-- <form method="post" action="">
                              @csrf
                                    <div class="form-group some-space">
                         
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth('client')->user()->name}}">
                                
                                          </div>
                                    <div class="form-group">
                         
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth('client')->user()->email}}">
                                  
                                    </div>
                                    <div class="form-group">
                         
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth('client')->user()->phone}}">
                                
                                          </div>
                                          <div class="form-group">
                         
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth('client')->user()->password}}">
                                    
                                              </div>
                                              <div class="form-group">
                                                
                                                <select class="form-control" placeholder="نص الرساله" rows="3"></>
                                                @foreach($cities as $city)
                                               <option>{{$city->name}}</option>
                                               @endforeach
                                               </select>
                                            </div>
                                    <button type="submit" class="btn btn-send-call hvr-float">ارسال</button>
                                  </form> -->

                           
                        </div>

            </div>


          </div>
      </div>
</section>
    <!--  FOOTER -->
@endsection