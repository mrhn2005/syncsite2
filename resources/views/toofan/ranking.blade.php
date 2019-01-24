@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس
@endsection

@section('styles')


@endsection

@section('content')

		@include('includes.header1')
    <div class="blog-single second-about">
        <div class="container">
            
            <div class="row">
        		<div class="col-md-6 col-md-offset-3 col-sm-12">
        			<div class="page-title">
        				<h2>
        	
                           رتبه تیم ها در رویداد توفان

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
                   <h2>
                       رتبه تیم ها
                   </h2>
                   <ul style="list-style:none;font-size:140%">
                   @foreach($groups->sortByDesc('visitor') as $group)
                       <li>{{$loop->iteration}}) {{$group->name}}</li>
                   @endforeach
                   </ul>
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

