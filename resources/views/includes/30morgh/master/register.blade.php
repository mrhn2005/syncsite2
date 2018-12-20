@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس:سیمرغ
@endsection

@section('styles')


@endsection

@section('content')

		@include('includes.30morgh.register.header')
    <div class="blog-single second-about">
        <div class="container">
            
            <div class="row">
        		<div class="col-md-6 col-md-offset-3 col-sm-12">
        			<div class="page-title">
        				<h2>
        		ثبت نام به عنوان منتور
        				</h2>
        			</div>
        		</div>
    	    </div>


            <div  class="row"  style="border:2px solid #9C27B0; padding:20px;">
                <div class="col-md-10 col-md-offset-1 about-info">
                    <form class="upload-form" role="form" data-toggle="validator" id="cmorgh"  method="post" action="{{route('master.store')}}" enctype="multipart/form-data">
   
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <h3 style="margin-top:40px;">
                                 اطلاعات شخصی:
                            </h3>
                            <hr style="border-top: 3px solid #bbb;">
                        </div>
                        <div class="form-group">
                          <label for="first_name">
                              نام :
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
                          <label for="national_number">
                              کد ملی:
                            </label>
                            <input type="text" pattern="^[\u06F0-\u06F90-9]{10}$" class="form-control" id="national_number" name="national_number" data-error="لطفا این فیلد را به درستی پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="degree">
                              مدرک تحصیلی:
                            </label>
                            <input type="text" class="form-control" id="degree" name="degree" data-error="لطفا این فیلد را پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="mobile">
                              شماره همراه:
                            </label>
                           <input type="text" pattern="^[\u06F0-\u06F90-9]{11}$" class="form-control" id="mobile" name="mobile" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." placeholder="09123456789" required>
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
                        <div class="col-md-12">
                            <h3 style="margin-top:40px;">
                                 اطلاعات کلی:
                            </h3>
                            <hr style="border-top: 3px solid #bbb;">
                        </div>
                        <div class="form-group">
                          <label for="field">
                             حوزه فعالیت:
                            </label>
                          <textarea class="form-control" rows="2" id="field" name="field"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                           <div class="help-block with-errors"></div>
                        </div>
                        <hr>

                        <div class="form-group">
                            <label for="experience">
                                 سابقه کار:
                            </label>
                          <textarea class="form-control" rows="2" id="experience" name="experience"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                           <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="know">
                              طریقه آشنایی با یاس:
                            </label>
                            <input type="text" class="form-control" id="know" name="know" data-error="لطفا این فیلد را پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="reason">
                                علت تمایل به همکاری با شرکت یاس:
                            </label>
                          <textarea class="form-control" rows="2" id="reason" name="reason"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                           <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                          <label for="resume">
                            ارسال رزومه:
                            (حداکثر 5 مگابایت)
                            </label>
                          <input type="file" class="resume-file" data-max-size="5000000"  id="resume" name="resume" required data-error="لطفا فایل رزومه را آپلود نمایید.">
                          <div class="help-block with-errors"></div>
                          
                        </div>
                        

                        <div  class="text-center">
                            <button style="width:50%;font-weight:bold;" type="submit" style="margin-top:10px;font-weight:bold" class="button btn-primary   btn-format" id="">
                               ثبت نام
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

$(function(){
    var fileInput = $('.resume-file');
    var maxSize = fileInput.data('max-size');
    $('.upload-form').submit(function(e){
        if(fileInput.get(0).files.length){
            var fileSize = fileInput.get(0).files[0].size; // in bytes
            if(fileSize>maxSize){
                alert('حجم فایل ارسالی بیشتر از مقدار مجاز است' );
                return false;
            }else{
                
            }
        }else{
            // alert('لطفا ابتدا فایل رزومه افراد تیم را آپلود نمایید.' );
            //     return false;
        }

    });
});
    </script>

@endsection

