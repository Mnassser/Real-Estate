@extends('layouts.front')
@section('content')
     <!-- breedcrumb-->

      

          <div class="row">
            @include('errors/verrors')
        <div class="col-md-12 signup-form">
            <form class="needs-validation" novalidate action="{{action('front\AuthController@store')}}" method="POST">
                <div class="form-row">
              
                  @csrf
                    <input type="text" class="form-control" id="validationCustom01" placeholder="الاسم"  name="name">
                    <div class="invalid-feedback">
                        Please provide a valid name.
                    </div>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="البريد الاكتروني" value="mazenanwer47@yahoo.com"  name="email">
                    
                    <div class="valid-feedback">
                      Looks good!
                    </div>

                     <input type="password" class="form-control" id="validationCustom02" placeholder="الرقم السري"  name="password">
                    
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                     <input type="password" class="form-control" id="validationCustom02" placeholder="تاكيد الرقم السري"  name="password_confirmation">
                    
                    <div class="valid-feedback">
                      Looks good!
                    </div>

                </div>

                <div class="form-row">
                
                    
                   
                    
                    
                
                   
                      <select class="custom-select custom-select-lg mb-2 mt-3 custom-width" name="city_id">
                        <option selected disabled>المدينة</option>
                        @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                      </select>
                    
                                        
                    <input type="text" class="form-control" id="validationCustom05" placeholder="رقم الهاتف" name="phone">
                    <div class="invalid-feedback">
                      Please provide a valid phone number .
                    </div>

                    
 
                    
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name="">
                  
                   
                  </div>
                </div>
                <button class="btn btn-create shadow" type="submit">انــشاء  </button>
              </form>
              
              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>

        </div>

          </div>
      </div>
</section>
    <!--  FOOTER -->
@endsection