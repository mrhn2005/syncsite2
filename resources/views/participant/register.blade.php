@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس: ثبت نام 
	{{$event->name}}
@endsection

@section('styles')
<style>
  .discount-code{
    border-radius:0px!important;
    height:50px;
    font-size:20px!important;
}

.discount-input:focus{
    border-color:green!important;
}

.discount-butt{
  margin: 0px !important;
    width:60px!important;
    color:white!important;
    background-color:#9C27B0!important;
    border:2px solid #9C27B0!important;
}

.discount-butt:hover{
    color:white!important;
    background-color: #90133B!important;
    border:2px solid #90133B!important;
}
.discount-butt:active{
    color:white!important;
    background-color: #90133B!important;
    border:2px solid #90133B!important;
}
.discount-butt:focus{
    color:white!important;
    background-color: #90133B!important;
    border:2px solid #90133B!important;
}
.myAlert-top {

    top: 20px;
}
</style>
@endsection

@section('content')

		@include('includes.header1')
    <div class="blog-single second-about">
        <div class="container">
            @include('includes.messages')
            <div class="row">
        		<div class="col-md-6 col-md-offset-3 col-sm-12">
        			<div class="page-title">
        				<h2>
        		ثبت نام در 
        		{{$event->event?'رویداد':'کارگاه'}}
        		{{$event->name}}
        				</h2>
        			</div>
        		</div>
        		<div class="col-md-8 col-md-offset-2 about-info" >

			<p style="font-size:17px;text-align:justify; color:#888888" >
    			{{$event->desc}}
    			<br>
    			
    		</p>
    		<div class="text-center">
    		    <a class="btn4 btn-primary" href="/photos/homa/past_workshops/{{$event->poster}}" target="_blank">
    			    دریافت  پوستر
    			</a>
    		</div>
		</div>
    	    </div>
    	    

            <div  class="row"  style="border:2px solid #9C27B0; padding:20px;">
                <div class="col-md-10 col-md-offset-1 about-info">
                    <form class="upload-form" role="form" data-toggle="validator" id="cmorgh"  method="post" action="{{route('event.register1')}}" enctype="multipart/form-data">
   
                        {{ csrf_field() }}
                        <input type="hidden" name="event_id" value="{{$event->id}}" >
                        <div class="form-group">
                          <label for="first_name">
                              نام:
                            </label>
                            <input type="text" class="form-control" id="first_name" name="first_name" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="last_name">
                              نام خانوادگی:
                            </label>
                            <input type="text" class="form-control" id="last_name" name="last_name" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="email">
                              پست الکترونیکی:
                            </label>
                            <input type="email" class="form-control" id="email" name="email" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید."   placeholder="test@test.com" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="phone">
                              شماره همراه:
                            </label>
                           <input type="text" pattern="^[\u06F0-\u06F90-9]{11}$" class="form-control" id="phone" name="phone" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." placeholder="09123456789" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="field">
                             رشته تحصیلی:
                            </label>
                            <input type="text" class="form-control" id="field" name="field" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr><div class="form-group">
                          <label for="degree">
                             میزان تحصیلات:
                            </label>
                            <input type="text" class="form-control" id="degree" name="degree" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr><div class="form-group">
                          <label for="city">
                             شهر محل سکونت:
                            </label>
                            <input type="text" class="form-control" id="city" name="city" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="organization">
                            سازمان محل کار:
                            </label>
                            <input type="text" class="form-control" id="organization" name="organization" placeholder="">
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="position">
                            سمت در سازمان:
                            </label>
                            <input type="text" class="form-control" id="position" name="position"  placeholder="">
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="know">
                             طریقه آشنایی با ما:
                            </label>
                            <input type="text" class="form-control" id="know" name="know" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        
                        <div class="col-md-offset-3 col-md-6 col-md-offset-3">
              						
              					  <div class="input-group">
              					  	
              					    <input type="text" class="form-control discount-code discount-input" id="discount-code" style="border-left: none;height: 54px;" placeholder="کد تخفیف دارید؟">
              					    <div class="input-group-btn">
              					      <a class="btn btn-default discount-code discount-butt" href="#"   title="اعمال">
              					        <i class="fa fa-check" style="vertical-align:top"></i>
              					      </a>
              					    </div>
              					  </div>
              					  
              					</div>
              					<br>
              					<input type="hidden" id="hidden-code" name="promocode" value="">
              					<div class="col-md-12">
                        <div  class="text-center">
                            <p style="font-size:150%;font-weight:bold;margin-top:30px">
                                هزینه ثبت نام:
                                <span id="event-price">{{$event->price}}</span>
                                تومان
                            </p>
                            
                        </div>
                        </div>
                        <div  class="text-center">
                            <button style="width:50%;font-weight:bold;margin-top:10px;" type="submit" class="button btn-primary   btn-format">
                               پرداخت آنلاین و ثبت نام
                            </button>
                        </div>

                    </form>
                </div>
            </div>
    
            
        </div>
        
    </div>

@endsection
@section('footer')
			<footer>
			<div class="container">
				<div class="col-md-8 col-md-offset-2 left-side col-xs-12">
					<span>
						© 
						تمامی حقوق این وبسایت متعلق به مرکز نوآوری یاس می باشد
						</span>
				</div>
				<div class="col-md-2 right-side col-xs-12">
					<span id="to-top">
					<i class="fa fa-arrow-up"></i>
					</span>
				</div>
			</div>
		</footer>

@endsection
@section('js')



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.7/validator.min.js"></script>
<script>
  $('body').on('click','.discount-butt',function(e) {
	
    e.preventDefault();
    if( !$('#discount-code').val() ) {
          $("#fixed-message").text("لطفا ابتدا کد تخفیف را وارد نمایید");
          $(".myAlert-top").show();
		  $(".myAlert-top").fadeOut(4000);
    }
    else{
    	$.ajax({
      url: "{{route('check.code')}}",
      method: 'post',
      data:{

        code2: $('#discount-code').val(),
        _token: "{{csrf_token()}}"
      },
      success: function(response){
          // console.log(response);
         
          $('#discount').text(response.discount);
          $('#subtotal').text(response.subtotal+parseInt($('#delivery_price').text()));
          $("#fixed-message").text("کد تخفیف با موفقیت اعمال شد.");
          $(".myAlert-top").show();
			$(".myAlert-top").fadeOut(5000);
			$('#event-price').text(response.subtotal);
			$('input[name=promocode]').val(response.promocode);
		// 	$('input[name=promocode]').val($('#discount-code').val());
      },
      error: function(xhr){
      	
        
            // $('body').html(xhr.responseText);
          //$("#main-cart").html(response);
          $("#fixed-message").text(xhr.responseJSON.error);
          $(".myAlert-top").show();
		  $(".myAlert-top").fadeOut(4000);
        // $('body').html(xhr.responseText)
        // $("#all-addresses").html(xhr.responseText);
        //  $("#mini-cart").html(xhr.responseText);
      }
      
      
    });
    }
    // console.log($('#discount-code').val());
    

});
</script>

@endsection

