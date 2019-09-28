@extends('layouts.app')

@section('content')
     <!-- breedcrumb-->
      <section id="breedcrumb">
      <div class="container">
          
          <div class="row bg-for-details">
          <div class="col-md-6">

              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">الطلب</div>
                </div>
                <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->title}}" disabled>
              </div>
              <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">النوع</div>
                  </div>
                  <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->category->name}}" disabled>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">اقصي سعر</div>
                    </div>
                    <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->price}} " disabled>
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">عدد الغرف</div>
                    </div>
                    <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->rooms}}" disabled>
                  </div>
                  
          </div>

          <div class="col-md-6">
           
              <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">اقصسي مساحية</div>
                  </div>
                  <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->price}}" disabled>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">الملحوظات</div>
                    </div>
                    <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->notice}}" disabled>
                  </div>
                  
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">الملحوظات</div>
                    </div>
                    <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->notice}}" disabled>
                  </div>
                  <div class="input-group-prepend">
                      <div class="input-group-text">التاريخ</div>
                    </div>
                    <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->created_at->diffForHumans()}}" disabled>
                    <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">اسم العميل</div>
                    </div>
                    <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->client->name}}" disabled>
                  </div>
                  </div>
              </div>

                  
            </div>
         
<div class="row bg-white">
  <div class="col-md-12">
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text">البيانات</div>
      </div>
      <input type="text" class="form-control bg-white" id="inlineFormInputGroup" value="{{$item->notice}}" disabled>
    </div>

  </div>
  <br>
 <hr>
 <br>
         <?php
                $exp = explode('|',$item->pictures);
                ?>
                @foreach($exp as $picture)
                <a href="{{asset('/pictures/'.$picture)}}"><img class="article-img shadow p-3 mb-5 nav" src="{{asset('/pictures/'.$picture)}}"></a>
                @endforeach
             
                 
</div>

</div>

                    
  
</div>




     </div>
         
          

</section>
    <!--  FOOTER -->
@endsection