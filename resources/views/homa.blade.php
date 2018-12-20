@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس: هما
@endsection

@section('content')

		<!--<div class="style-switcher">-->
		<!--	<div class="switcher-open">-->
		<!--		<a>-->
		<!--			<i class="fa fa-gear"></i>-->
		<!--		</a>-->
		<!--	</div>-->
		<!--	<div class="switcher-section">-->
		<!--		<h4>Animation</h4>-->
		<!--		<ul>-->
		<!--			<li class="active"><a href="">LINE</a></li>-->
		<!--			<li><a href="index-3.html">FOUNTAIN</a></li>-->
		<!--			<li><a href="index-2.html">BUBBLES</a></li>-->
		<!--			<li><a href="index-4.html">RAYS</a></li>-->
		<!--			<div class="clear"></div>-->
		<!--		</ul>-->
		<!--	</div>-->
		<!--</div>-->

		
		@include('includes.homa.header')
		@include('includes.homa.top')
		@include('includes.homa.about')
		<!-- About -->
		<!-- Testimionials -->
		<div class="testimonials" style="background-image: url(assets/images/picture1.jpg); background-position: 0% 40%;">
			<div class="testimonials-overlay"></div>
			<div class="container">
				<div class="testimonials-inner">
					<h3 style="text-align:center;color:rgb(12, 180, 206);">
					ارتباط با مسئولین شبکه های تلویزیونی و رسانه های تصویری
					</h3>
					<p>
جلسات متفاوتی با مدیران و  مسئولین شبکه های افق و نسیم و رسانه های تصویری اینترنتی اینوتاکس و فرانش برگزار شد.
طی این جلسات به مسائلی از قبیل ساخت سریال های آپارتمانی درحوزه کار و کسب کارآفرینی ،ساخت فیلم های آموزشی در بستر وب و تیزرهای یک دقیقه ای مخترعین بحث شد که بخشی از این طرح ها در دست اجرا می باشند.
تولید محتوا در کانال رویدادهای کارآفرینی هدهد در حوزه های کار و کسب و کارآفرینی ، انگیزشی و اقتصادی که قریب به 1400 عضو دارد.

					</p>
					
				</div>
			</div>
		</div>
		<!-- Testimionials -->
		<!-- Our Team -->
		@include('includes.homa.team')
		<!-- Our Team -->
		<div class="testimonials" style="background-image: url(assets/images/picture1.jpg); background-position: 0% 40%;">
			<div class="testimonials-overlay"></div>
			<div class="container">
				<div class="testimonials-inner">
					<h3 style="text-align:center;color:rgb(12, 180, 206);">
					جلسات هم اندیشی دانش بنیان
					</h3>
					<p>
   جلسات هم اندیشی در حوزه اقتصاد دانش بنیان و سبک زندگی دانشجویی در دانشگاه ها برگزارشدند که منجر به تشویق دانشجویان به فعالیت علمی و اقتصادی همراه تحصیل و کارآفرینی بعد از آن و جذب آن ها به مراکز دانش بنیان شد. که قریب به 1400 عضو دارد.
تا کنون 3500 نفر ساعت جلسه هم اندیشی در دانشگاه های امام حسین، شریعتی، تهران، شهید بهشتی، محقق اردبیلی، خرمشهر، خوارزمی، اراک، شاهد و … تشکیل شده است.
					</p>
					
				</div>
			</div>
		</div>
		<!-- Statistic -->
		@include('includes.homa.upcoming_workshops')
		<!--<div class="statistic" style="background-image: url(assets/images/picture1.jpg);background-position: 0% 40%;">-->
		<!--	<div class="statistic-overlay"></div>-->
		<!--	<div class="container">-->
		<!--		<div class="statistic-inner">-->
		<!--			<div class="statistic-posts">-->
		<!--				<div class="owl-two owl-carousel owl-theme" style="font-size:19px;">-->
		<!--					<div class="post" >-->
		<!--						<span data-count="600" class="timer">+0</span>-->
		<!--						<p>-->
		<!--							اشتغال مستقیم-->
		<!--							</p>-->
		<!--					</div>-->
		<!--					<div class="post">-->
		<!--						<span data-count="30" class="timer">0</span>-->
		<!--						<p>-->
		<!--							شرکت نوپا-->
		<!--							</p>-->
		<!--					</div>-->
		<!--					<div class="post">-->
		<!--						<span data-count="200" class="timer">0</span>-->
		<!--						<p>-->
		<!--							تیم‌های بررسی شده-->
		<!--							</p>-->
		<!--					</div>-->
		<!--					<div class="post">-->
		<!--						<span data-count="25" class="timer">0</span>-->
		<!--						<p>-->
		<!--							مربیان-->
		<!--							</p>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->
		<!-- Statistic -->
		<!-- Work -->
<!--		<div class="work">-->
<!--			<a href="#" id="work"></a>-->
<!--			<div class="container">-->
<!--				<div class="row">-->
<!--					<div class="col-md-6 col-md-offset-3 col-sm-12" style="margin-bottom:20px;">-->
<!--						<div class="page-title">-->
<!--							<h2>-->
<!--							تماس با یاس-->
								
<!--								</h2>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="row">-->
					
<!--					<div class="col-md-6">-->
<!--						<h2 style="margin:20px;">-->
<!--							اطلاعات تماس-->
<!--							</h2>		-->
<!--						<div class="w-tabs-section-header-h">-->
<!--							<i class="fa fa-envelope-o fa-lg"></i>&nbsp;-->
<!--							<span class="w-tabs-section-title">-->
<!--								ایمیل:-->
<!--								info@yasidea.ir-->
<!--								</span>-->
								
<!--						</div>-->

<!--						<div class="w-tabs-section-header-h">-->
<!--							<i class="fa fa-tty fa-lg"></i>&nbsp;-->
<!--							<span class="w-tabs-section-title" >-->
<!--								تلفن تماس:-->
<!--76250350-021-->

						
<!--							</span>-->
<!--						</div>-->
						
<!--						<div class="w-tabs-section-header-h">-->
<!--							<i class="fa fa-building fa-lg"></i>&nbsp;-->
<!--							<span class="w-tabs-section-title" style="text-align:justify;font-size:16px;">-->
<!--								آدرس:-->
<!--								تهران - کیلومتر ۲۰ جاده دماوند - پارک فناوری پردیس - خیابان نوآوری دوم - پلاک ۲۳-->
<!--							</span>-->
<!--						</div>-->
						
<!--						<div class="w-tabs-section-header-h">-->
<!--							<i class="fa fa-paper-plane fa-lg"></i>&nbsp;-->
<!--							<span class="w-tabs-section-title">-->
<!--								<a style="" href="https://telegram.me/joinchat/BY96aT-jnyiG3AtRJVbu8g" target="_blank">Hodhod_events@</a>-->
<!--							</span>-->
<!--						</div>-->
						
<!--						</div>-->
<!--					<div class="col-md-6">-->
<!--						<div id="map" style="width:100%;height:400px;" style=""></div>-->
<!--					</div>-->
					
					
					
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
		<!-- Work -->
		<!-- Services -->

		<!-- Clients -->
		<!-- Call to Action -->
		
		<!-- Call to Action -->
		<!-- Contact -->
		<!--<div class="contact" style="background-image: url(assets/images/picture1.jpg);background-position: 0% 30%;">-->
		<!--	<a href="#" id="contact"></a>-->
		<!--	<div class="contact-overlay"></div>-->
		<!--	<div class="container">-->
		<!--		<div class="contact-inner">-->
		<!--			<div class="row">-->
		<!--				<div class="col-md-6 col-md-offset-3 col-sm-12">-->
		<!--					<div class="page-title">-->
		<!--						<h2>-->
		<!--							سوال‌ها و درخواستهایتان را-->
		<!--							<br>-->
		<!--							با ما در میان بگذارید-->
		<!--						</h2>-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			<div class="contact-form">-->
		<!--				<div class="col-md-8 col-md-offset-2">-->
		<!--					<div class="input">-->
		<!--						<div class="col-md-4 col-sm-4">-->
		<!--							<input name="name" type="text" placeholder="نام">-->
		<!--						</div>-->
		<!--						<div class="col-md-4 col-sm-4">-->
		<!--							<input name="email" type="text" placeholder="ایمیل">-->
		<!--						</div>-->
		<!--						<div class="col-md-4 col-sm-4">-->
		<!--							<input name="phone" type="text" placeholder="تلفن">-->
		<!--						</div>-->
		<!--					</div>-->
		<!--					<textarea name="request" placeholder="پیام شما" cols="30" rows="10" required></textarea>-->
		<!--					<input class="submit" name="submit_request" type="submit" value="ارسال پیام">-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->
	
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

<script src="assets/js/demo-2.js"></script>
<script>
$(document).ready(function(){
	var hash = window.location.hash.substring(1);
	if(hash=='workshops') {
		window.onload = function() {
		    document.getElementById("workshops-click").click();
		};
		window.location.hash='';
		history.pushState("", document.title, window.location.pathname);
  } 
	
});
</script>
@endsection