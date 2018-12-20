@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس:سیمرغ
@endsection

@section('styles')


@endsection

@section('content')

		@include('includes.homa.register.header')
    <div class="blog-single second-about">
        <div class="container">
            
            <div class="row">
        		<div class="col-md-6 col-md-offset-3 col-sm-12">
        			<div class="page-title">
        				<h2>
        		ارسال محتوایتان در حوزه کار آفرینی
        				</h2>
        			</div>
        		</div>
    	    </div>
    	    <div  class="row" >
        		<div class="col-md-8 col-md-offset-2 about-info">
        		    <p style="font-size:17px;text-align:center; " >
                       
                    </p>
                </div>
            </div>
            <div  class="row"  style="border:2px solid #9C27B0; padding:20px;">
                <div class="col-md-10 col-md-offset-1 about-info">
                    <form class="upload-form" role="form" data-toggle="validator" id="cmorgh"  method="post" action="{{route('homa.add')}}" enctype="multipart/form-data">
   
                        {{ csrf_field() }}

                       <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">
                               نام:
                                </label>
                                <input type="text" class="form-control" id="name" name="name" data-error="لطفا این فیلد را  پر نمایید."  required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">
                                پست الکترونیکی:
                                </label>
                                <input type="email" class="form-control" id="email" placeholder="test@test.com" name="email"  data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">
                                شماره تلفن:
                                </label>
                                <input type="text" class="form-control" placeholder="09124433443"  pattern="^[\u06F0-\u06F90-9]{11}$" id="phone" name="phone"  data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="desc">
                                 توصیح یا متن در حوزه کارآفرینی:
                                </label>
                              <textarea class="form-control" rows="5" id="desc" name="desc"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                              <label for="file">
                                                آپلود عکس یا متن یا فیلم در حوزه کارآفرینی
                                (حداکثر 5 مگابایت)
                                </label>
                              <input type="file" class="upload-file" data-max-size="5000000"  rows="2" id="file" name="file">
                              
                            </div>
                        </div>
                        <div id="" class="text-center">
                            <button style="width:50%;font-weight:bold;" type="submit" style="margin-top:10px;font-weight:bold" class="button btn-primary   btn-format" id="">
                               ارسال
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
    var fileInput = $('.upload-file');
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
            
        }

    });
});
    </script>

@endsection

