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
    	    <div  class="row" style="border:2px solid #9C27B0;padding-bottom:30px">
        		
        		    <div class="col-md-12" style="font-size:120%;font-weight:bold;margin-top:30px;">
        		    	<div class="text-center" >
        		    	<p>
        		    		لطفا یکی از گزینه های زیر را انتخاب نمایید:
        		    	</p>
        		    	</div>
        		    </div>
        		    <?php $i=0; ?>
        		    @foreach($modes as $mode)
        		    <?php $i++; ?>
        		    <div class="col-md-12" style="font-size:120%;font-weight:bold;margin-top:20px;margin-bottom:20px;">
        		    	
        		        <div class="text-center" >
            		        <a style="font-size:130%"  href="{{route('trainer.register.mode',$mode)}}">
            		            {{$i}}) 
            				  {{$mode->title}}
            				</a>
        				</div>
        		    </div>
        		    @endforeach

        		    
                
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

