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
            
            <h1 style="text-align:center;    font-weight: 700;margin:50px;font-size:40px;">
              {{$event->name}}  
              <img style="height:60px;" class="" src="{{$event->logo ? '/photos/hodhod/events/'.$event->logo : 'http://placehold.it/400x400' }}" alt="img18"/>
            </h1>
            	
            <div class="row">
                
                <div class="col-md-12" style="margin-top:-30px; line-height: 200%;text-align:justify;">
                    <p style="text-align:justify; font-size:20px;">
                        {!! $event->desc !!}
                    </p>
             
                    <br>
                    <!--<div class="alert alert-success">-->
                    <!--    <h3>-->
                    <!--                    تاریخ اولین فراخوان پیش رو:-->
                    <!--        96/10/1-->
          
                    <!--    </h3>-->
                    <!-- </div>-->
                    <!-- <div class="text-center">-->
                    <!--    <button type="button" class="btn btn-info second-button btn1 btn-1 btn-1e" style="margin:auto;font-size:22px;cursor:not-allowed;">-->
                    <!--        ثبت نام در فراخوان-->
                    <!--    </button>-->
                    <!--</div>-->
                </div>
                
                <div class="col-md-12" style="margin-top:40px;">
                    <hr>
                    <div class="owl-five owl-carousel owl-theme grid" style="font-weight:bold;direction:ltr!important;">
    		    
        			<div class="member">
        				<a href="/photos/hodhod/1.jpg" data-lightbox="image-1" data-title="
        				رویدادهای هما
        				"><img src="/photos/hodhod/1.jpg" alt="img18"/></a>
        					

    			</div>
    			<div class="member">
    				<a href="/photos/hodhod/2.jpg" data-lightbox="image-1" data-title="
    					رویدادهای هما
    				"><img src="/photos/hodhod/2.jpg" alt="img18"/></a>
    					
    			</div>
    			<div class="member">
    					<a href="/photos/hodhod/3.jpg" data-lightbox="image-1" data-title="
    						رویدادهای هما
    					"><img src="/photos/hodhod/3.jpg" alt="img18"/></a>
    					
    					

    			</div>
    			<div class="member">
    				
    					<a href="/photos/hodhod/4.jpg" data-lightbox="image-1" data-title="
    						رویدادهای هما
    					"><img src="/photos/hodhod/4.jpg" alt="img18"/></a>
  
    			</div>
    			<div class="member">
    				
    					<a href="/photos/hodhod/5.jpg" data-lightbox="image-1" data-title="
    						رویدادهای هما
    					"><img src="/photos/hodhod/5.jpg" alt="img18"/></a>
    					
    				
    			</div>
    		</div>
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



