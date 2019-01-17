@extends('layouts.frontend.frontpage')
@section('content')
<style type="text/css">
    .img-wrap {
    position: relative;    
    }
    .img-wrap .close {
    position: absolute;
    top: 0px;
    right: 25px;
    z-index: 100;   
    opacity: 1;
    }
    .error_input {
    border-color:#D31E2B !important;
    }
    .error {
    border: none;
    color: #d9534f;    
    font-size: 13px;
    }
  
</style>
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    

                    <h1>Please fill the fom below </h1>

                    <p class="lead">PERSONAL INFORMATION GUARANTEE.</p>
                    <p class="lead">We do not cold call, spam or pass on your data for marketing.</p>
                    <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                    </div>
                    <div class="alert alert-success print-succ-msg" style="display:none"></div>

                    @if(session('alert-success'))
                <div class='alert alert-success'>
                    {{ session('alert-success')}}
                </div>
                @endif
                @if(session('messagefail'))
                <div class='alert alert-danger'>
                    {{ session('messagefail') }}
                </div>
                @endif

                @if (count($errors) > 0)     
                <div class="form-group">         
                        <div class="alert alert-danger">
                            <strong>Whoops! Something went wrong!</strong>
                            <br><br>
                            <ul style="padding-left: 10px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                </div>                              
                @endif

                    <form id="form1" name="form1" method="post" action="{{URL('/save-lead')}}" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="first_name" type="text" name="first_name" class="form-control" placeholder="Please enter firstname" required="required" value="{{old('first_name')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="last_name" type="text" name="last_name" class="form-control" placeholder="Please enter lastname" required="required" value="{{old('last_name')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email Address*</label>
                                        <input id="email" type="email" name="email" class="form-control" placeholder="Please enter email address" required="required" value="{{old('email')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone Number*</label>
                                        <input id="phone" type="text" name="phone" class="form-control" placeholder="Please enter phone number" value="{{old('phone')}}" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Home square footage*</label>
                                        <input id="home_area" type="text" name="home_area" class="form-control" placeholder="Please enter home square area" required="required" value="{{old('home_area')}}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Address</label>
                                        <textarea id="address" name="address" class="form-control" placeholder="Please enter address details" rows="4">{{old('address')}}</textarea>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                            {{ csrf_field() }}                                
                                <div class="col-md-12">
                                    <input type="hidden" name="camp_id" id="camp_id" value="4">
                                    <input type="submit" class="btn btn-success btn-send" value="Submit" name="save" id="save">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. </p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

            <div id='loadingmessage' style="display:none;  
            position: fixed; left:0%;top: 0%; text-align: center; z-index : 5000;" class="modal">
            <img src="{{ URL::asset('images/loader1.gif')}}" style="position: relative; left:0%;top: 50%;" />
            </div>

        </div> <!-- /.container-->
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        //Ajax function for saving incompleted form datas
        $(document).mouseleave(function () {
            $.ajax({
                    type    : "POST",
                    url     : '/ajax-save-incomplete-lead',
                    data    : $('#form1').serialize(),
                    success : function(dat)
                    {}
                });

        });

    })

    $(document).ready(function (){

        $('#save').click(function(e){
        //Stop form submission & check the validation
        e.preventDefault();
        // Variable declaration
        var error               = false;
        var first_name          = $('#first_name').val();
        var last_name           = $('#last_name').val();
        var email               = $('#email').val();
        var phone               = $('#phone').val();
        var home_area           = $('#home_area').val();
        
        $("span.error").hide();
        $("text").removeClass("error_input");

        $('#first_name,#last_name,#email,#phone,#home_area').click(function(){
            $(this).removeClass("error_input");
            $(this).next("span").remove();
        });
            
          // Form field validation
            if(first_name.length == 0){
                var error = true;
                $('#first_name').addClass("error_input");
                $('#first_name').after('<span class="error">Firstname is required</span>');
            }else{
                $('#first_name').removeClass("error_input");
            }
            if(last_name.length == 0){
                var error = true;
                $('#last_name').addClass("error_input");
                $('#last_name').after('<span class="error">Lastname is required</span>');
            }else{
                $('#last_name').removeClass("error_input");
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email').addClass("error_input");
                $('#email').after('<span class="error">A valid email address is required</span>');
            }else{
                $('#email').removeClass("error_input");
            }
            if(phone.length == 0){
                var error = true;
                $('#phone').addClass("error_input");
                $('#phone').after('<span class="error">Phone number is required</span>');
            }else{
                $('#phone').removeClass("error_input");
            }

            if(home_area.length == 0){
                var error = true;
                $('#home_area').addClass("error_input");
                $('#home_area').after('<span class="error">Home square area is required</span>');
            }else{
                $('#home_area').removeClass("error_input");
            }
            
            // If there is no validation error, next to save the informations
            if(error == false){   
            $('#loadingmessage').show();            
                $.ajax({
                    type    : "POST",
                    url     : '/ajax-save-lead',
                    data    : $('#form1').serialize(),
                    success : function(dat)
                    {
                      $('#loadingmessage').hide();
                      $(".print-succ-msg").css('display','none');
                      $(".print-error-msg").css('display','none');
                      if(dat.result=='Success')
                      {
                        $('#first_name').val('');
                        $('#last_name').val('');
                        $('#email').val('');
                        $('#phone').val('');
                        $('#home_area').val('');
                        $('#address').val('');
                        $(".print-succ-msg").css('display','block');
                        $(".print-succ-msg").html('You have successfully submitted the data. Thank you for sharing the information.');
                      }
                      else if(dat.result=='DB Error')
                      {  
                        $(".print-error-msg").css('display','block');
                        $(".print-error-msg").html(dat.errors);
                      }
                      else
                      {
                        printErrorMsg(dat.errors);
                      }                      
                    }
                  });
            }
        }); 
    })

function printErrorMsg (msg) 
{
      $(".print-error-msg").find("ul").html('');
       $(".print-error-msg").css('display','block');
       $.each( msg, function( key, value ) {
         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
       });
}
</script>
@endpush
        
