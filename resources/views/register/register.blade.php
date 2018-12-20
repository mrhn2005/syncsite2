@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس:سیمرغ
@endsection

@section('styles')
<style>
    .btn{
        white-space:normal!important;
        letter-spacing:0px !important;
    }
</style>

@endsection

@section('content')

		@include('includes.30morgh.register.header')

<div class="blog-single second-about" style="height:1000px;">
        <div class="container">
            
            <div class="row" style="padding-top:7%">
        		<div class="col-md-6 col-md-offset-3 col-sm-12">
        			<div class="page-title">
        				<h2>
                            به صف جنگجویان
                            <br>
                            تغییر سرنوشت ملحق شوید.
        				</h2>
        			</div>
        		</div>
    	    </div>
    	    <div  class="row" >
        		
        		    
        		    <div class="col-md-6" style="font-size:120%;font-weight:bold">
        		        <div class="text-center">
            		        <a style="font-size:130%" class="button btn second-button  btn-1 btn-1e" href="/hodhod#events">
            				علاقه مند به منتورینگ در شتابدهنده هستم
            					</a>
        				</div>
        		    </div>
        		    <div class="col-md-6" style="font-size:120%;font-weight:bold">
        		        <div class="text-center">
            		        <a style="font-size:130%" class="button btn second-button  btn-1 btn-1e" href="{{route('trainer.register')}}">
                    		  علاقه مند به حضور در شتابدهنده هستم        
                				</a>
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

