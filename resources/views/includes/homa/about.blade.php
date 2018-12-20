<div class="second-about">
<a href="#" id="about"></a>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-12">
			<div class="page-title">
				<h2>
				درباره هما
					
					</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 about-info">
		<p style="font-size:17px;text-align:justify; " >
واحد هدفمند سازی محتوا و آموزش هما به تولید و تبیین محتوا در حوزه ی کارآفرینی و نوآوری در زمینه های مختلف و برگزاری دوره های آموزشی مبتنی بر مدل ها و محتواهای تولید شده در این واحد می پردازد.
                    
                        برخی از فعالیت های هما عبارتند از:
                   <br> 
برگزاری جلسات هم اندیشی در حوزه کسب و کار و اقتصاد دانش بنیان در دانشگاه های امام حسین(ع) ، محقق اردبیلی،علم و صنعت، صنعتی شریف، تربیت مدرس، فنی شریعتی، مازندران ،خرمشهر و …
                    
  <br>
                    
برگزاری کارگاه های ایده کاوی و خلاقیت
                    
      <br>               
برگزاری کارگاه اکوسیستم کارآفرینی
                     <br>
ترجمه کتب و مقالات
                    </p>
		</div>
	</div>
	<!--<div class="about-img">-->
	<!--	<img src="photos/homa/main.jpg" alt="">-->
	<!--</div>-->
	<h4 style="text-align:center">
		پوستر برخی کارگاه‌های برگزار شده
	</h4>
	<div class="owl-seven owl-carousel owl-theme grid" style="margin-top:20px;direction:ltr !important;padding-bottom:20px;">
		@foreach($workshops_past as $workshop_past)

	      @if($workshop_past->active==0)
			<div class="member">
					<a href="{{$workshop_past->poster ? '/photos/homa/past_workshops/'.$workshop_past->poster : 'http://placehold.it/400x400' }}" data-lightbox="image-2" data-title="
				{{$workshop_past->name}}
				"><img src="{{$workshop_past->poster ? '/photos/homa/past_workshops/'.$workshop_past->poster : 'http://placehold.it/400x400' }}" alt="img18"/></a>

				<div class="caption">

		         
		        </div>
			</div>
			@endif
		@endforeach
	</div>
</div>
</div>
<!-- Call to Action -->
<div class="call-to-action">
<div class="container">
	<div class="color-5">
    		<p>
    			<a href="{{route('homa.upload')}}" class="btn btn-5 btn-5a icon-cart" style="padding-top: 10px;"><span style="font-size:25px">
    				محتویات خود در حوزه کارآفرینی را
    				<br>
    				برای ما ارسال کنید
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
    			کارگاه‌های چند تعاملی
    					</h2>
    			</div>
    		</div>
    	</div>
    
  <div class="members" style="padding-top:45px;">

	<div class="row">
		<div class="col-md-8 col-md-offset-2 about-info">
		<p style="font-size:17px;text-align:justify; color:#888888" >
  در این کارگاه ها علاوه بر انتقال اطلاعات بین دانشجو و استاد ، انتقال اطلاعات بین دانشجویان نیز صورت می گیرد. 
  افراد یادگیرنده با تعامل ، اشتراک گذاری و هم افزایی بین برداشت ها و آموخته هایشان منجر به ایجاد جریان دانشی می شوند که اثراتش به مراتب بالاتر از روش های مورد استفاده در کارگاه های متداول است.
کارگاه های ایده کاوی و خلاقیت ، نمونه اولیه کارگاه های چند تعاملی می باشد که در بستر گیمفیکیشن و نوآوری باز اجرا می گردد. 
کارگاه های ایده کاوی و خلاقیت با اهداف:
<br>
- ايجاد توانايي در مخاطبان به منظور شناسايي كاربردها و استفاده از تکنیک های خلاقیت در راستای وظايف محوله
<br>
- تسهیل در امر تصمیم سازی برای مديران ارشد و بالا دستي با استفاده از خلاقیت و ايده پردازی در دانشگاه ها و مراکز آموزشی برگزار شده است.
<br>
4000 نفر ساعت کارگاه چند تعاملی طی سال گذشته تشکیل شده است که شامل کارگاه های زیر می باشد :
<br>
ایده کاوی و خلاقیت، 
شخصیت شناسی ، 
توسعه فردی ، 
پرسنال برندینگ، 
روش اصولی سرچ ، 
اینفوگرافیک ، 
مکاتبات اداری، 
داستان نویسی، 
گیمیفیکیشن، 
تجربه کاربری،  
قانون تجارت، 
زیست بوم کارآفرینی، 
مدل کار و کسب

                    </p>
		</div>
		
			
		</div>
    	
    </div>
    <div class="owl-seven owl-carousel owl-theme grid" style="margin-top:20px;direction:ltr !important">
		@foreach($workshops as $workshop)

	    
			<div class="member">
					<a href="{{$workshop->photo ? '/photos/homa/'.$workshop->photo : 'http://placehold.it/400x400' }}" data-lightbox="image-1" data-title="
				{{$workshop->date}}
				"><img src="{{$workshop->photo ? '/photos/homa/'.$workshop->photo : 'http://placehold.it/400x400' }}" alt="img18"/></a>

				<div class="caption">

		         
		        </div>
			</div>
		@endforeach

	</div>
</div>
</div>