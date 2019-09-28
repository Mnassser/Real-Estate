@extends('layouts.front')
     <!-- breedcrumb-->
@section('content')
      <section id="breedcrumb">
      <div class="container">
         
          <div class="row">
      <div class="col-md-12">
          <div class="article-content shadow">
              <p class="content">
                    @include('errors/verrors')
        <form method="post" action="/test">
                    @csrf
                    
                            <div class="form-group">
                            
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الجوال" name="email">
                           
                            </div>
                            <div class="form-group">
                         
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور" name="password">
                            </div>
                            <div class="form-check ">
                              <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">تذكرني</label>
                              </div>

             
                            </div>
                            <div class="did-u-forget clearfix">
                              <a class="forget-pass" href="#"><p class="forget ">هل نسيت كلمة المرور</p></a>
                              <img class="complian forget"src="imgs/complain.png">

                             </div>
                            <div class="form-btns">
                            <button type="submit" class="btn btn-login">دخول </button>

                            <a href="/test/signup" class="btn btn-new">انشاء حساب جديد </a>
                        </div>
                          </form>
                
            </div>

        </div>

          </div>
      </div>
</section>
    <!--  FOOTER -->
@endsection