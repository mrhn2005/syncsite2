<div class="second-about">
<a href="#" id="about"></a>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-12">
			<div class="page-title">
				<h2>
				درباره هدهد
					
					</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 about-info">
		<p style="font-size:17px;text-align:justify; " >

                    </p>
                                 <p style="text-align:justify; font-size:17px;">
واحد رویدادهای کارآفرینی هدهد با طراحی و اجرای پلتفرم های حل مساله به تقویت و توسعه اجتماعی و فردی در موضوعات نوآوری و کارآفرینی می پردازد

برخی از فعالیت های صورت گرفته در این واحد به شرح زیر می باشد:
                    </p>
                    <p style="text-align:justify; font-size:17px;">
دست به آچار: نوآوری و کارآفرینی در حوزه های سخت افزاری به درخواست شتابدهنده استارت آپ های سخت افزاری
                    </p>

                    <p style="text-align:justify; font-size:17px;">
                        دانشبازی:
                        رویدادی با هدف شبیه سازی محیط نوآوری در صنعت سرگرمی به درخواست شرکت فن آموز و با هدف نوآوری در پروژه تالار علم باغ کتاب برگزار گردید
                    </p>

                    <p style="text-align:justify; font-size:17px;">
                        هدهد رویارویی با مسائل و چالش های کسب و کاری،اجتماعی،فرهنگی و … در دنیای پیرامونمان را مطلوب خویش می داند.
                    </p>
                    <br>
		</div>
	</div>
	<div class="about-img">
		<img src="photos/hodhod/main.JPG" style="filter: grayscale(60%);" alt="">
	</div>
</div>
</div>
<!-- Call to Action -->
<div class="call-to-action">
<div class="container">
	<div class="color-5">
    		<p>
    			<a href="{{route('hodhod.register')}}" class="btn btn-5 btn-5a icon-cart" style="padding-top: 10px;"><span style="font-size:25px">
    			رویدادی را که تمایل دارید برای اعضا خود 
    				<br>
    			برگزار کنید را ثبت کنید
    				</span></a>
    		</p>
    	</div>
    </div>
</div>
<!-- Call to Action -->
<!-- About -->
<div class="services">
<a href="#" id="services"></a>
    <div class="container">
    	
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3 col-sm-12">
    			<div class="page-title">
    				<h2>
    			رویدادها
    					</h2>
    			</div>
    		</div>
    	</div>
    
  <div class="members">


    <div class="owl-seven owl-carousel owl-theme grid" style="margin-top:20px;direction:ltr !important;">
				@foreach($events as $event)

    		    <a data-toggle="modal" href="{{route('hodhod.event',$event->name_eng)}}" sytle="text-decoration: none;">
        			<div class="member">
        				
        					<img class="" src="{{$event->logo ? '/photos/hodhod/events/'.$event->logo : 'http://placehold.it/400x400' }}" alt="img18"/>
        					
        				<div class="caption">
    
        		         <!-- <p>-->
        		         <!--{{$event->name}}-->
        		         <!-- </p>-->
        		        </div>
        			</div>
        		</a>
				@endforeach

			</div>
</div>
</div>
</div>