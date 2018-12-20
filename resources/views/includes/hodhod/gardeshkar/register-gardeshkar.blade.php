@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس: هدهد
@endsection

@section('styles')


@endsection

@section('content')

		@include('includes.hodhod.register.header')
    <div class="blog-single second-about">
        <div class="container">
            
            <div class="row">
        		<div class="col-md-6 col-md-offset-3 col-sm-12">
        			<div class="page-title">
        				<h2>
        	
                           فرم درخواست گردشکار

        				</h2>
        			</div>
        		</div>
    	    </div>
    	    <br>
    	    <!--<div  class="row" >-->
        	<!--	<div class="col-md-8 col-md-offset-2 about-info">-->
        	<!--	    <p style="font-size:17px;text-align:center; " >-->
         <!--              <a href="/form/event-form.docx">-->
         <!--                  جهت دانلود فرم کلیک کنید.-->
         <!--              </a>-->
         <!--           </p>-->
         <!--       </div>-->
         <!--   </div>-->
            <div  class="row"  style="border:2px solid #9C27B0; padding:20px;">
                <div class="col-md-10 col-md-offset-1 about-info">
                    <form class="upload-form" role="form" data-toggle="validator" id="cmorgh"  method="post" action="{{route('hodhod.gardeshkar.request')}}" enctype="multipart/form-data">
   
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <h3 style="margin-top:40px;">
                                اطلاعات گردشکار:
                            </h3>
                            <hr style="border-top: 3px solid #bbb;">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="organ">
                               ارگان، موسسه یا دانشگاه سفارش دهنده:
                                </label>
                                <input type="text" class="form-control" id="organ" name="organ" data-error="لطفا این فیلد را  پر نمایید."  placholder="" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="time">
                                تاریخ‌های پیشنهادی:
                                </label>
                                <input type="text" class="form-control" id="time" name="time" data-error="لطفا این فیلد را  پر نمایید."  required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        

                        
 
                       <div class="col-md-12">
                            <div class="form-group">
                              <label for="goal">
                                 هدف از برگزاری رویداد گردشکار:
                                </label>
                              <textarea class="form-control" rows="3" id="goal" name="goal"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="audience">
                                رشته تحصیلی یا تخصص بازدیدکنندگان:
                                </label>
                              <textarea class="form-control" rows="3" id="audience" name="audience"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        
                        <div class="col-md-12">
                            <h3 style="margin-top:40px;">
                                 اطلاعات درخوست کننده:
                            </h3>
                            <hr style="border-top: 3px solid #bbb;">
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">
                                نام خانوادگی:
                                </label>
                                <input type="text" class="form-control" id="last_name" name="last_name" data-error="لطفا این فیلد را  پر نمایید."   placholder="" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">
                               نام:
                                </label>
                                <input type="text" class="form-control" id="first_name" name="first_name" data-error="لطفا این فیلد را  پر نمایید."   required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">
                                پست الکترونیکی:
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="test@test.com" name="email"  data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">
                               شماره تماس (تلفن همراه یا ثابت):
                                </label>
                                <input type="text" class="form-control" id="phone" placeholder="02144335544" pattern="^[\u06F0-\u06F90-9]{11}$" name="phone" Required  data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
  
                        <div id="" class="text-center">
                            <button style="width:50%;font-weight:bold;" type="submit" style="margin-top:10px;font-weight:bold" class="button btn-primary   btn-format" id="">
                              درخواست گردشکار
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



@endsection

