@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس: ثبت نام 
	{{$event->name}}
@endsection

@section('styles')


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
        		<div class="col-md-8 col-md-offset-2 about-info" sytle="">

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
                          <label for="know">
                             طریقه آشنایی با ما:
                            </label>
                            <input type="text" class="form-control" id="know" name="know" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div id="" class="text-center">
                            <p style="font-size:150%;font-weight:bold">
                                هزینه ثبت نام:
                                {{$event->price}}
                                تومان
                            </p>
                            
                        </div>
                        <div id="" class="text-center">
                            <button style="width:50%;font-weight:bold;" type="submit" style="margin-top:10px;font-weight:bold" class="button btn-primary   btn-format">
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


@endsection

