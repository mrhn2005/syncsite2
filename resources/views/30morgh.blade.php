@extends('layouts.main')

@section('title')
 شتابدهنده سیمرغ -مرکز نوآوری یاس
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<link rel="stylesheet" href="css/timeline.css">



<style>
#map_8334z9 {
    position: relative;
    width: 600px;
    height: 400px;
    max-width: 100%;
  }
  
  .up-time{
      background-color:white!important;
  }
  </style>
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

		
		@include('includes.30morgh.header')
		@include('includes.30morgh.top')
		@include('includes.30morgh.about')
		<!-- About -->
		<!-- Testimionials -->
			<div class="statistic" style="background-image: url(assets/images/picture1.jpg);background-position: 0% 40%;">
			<div class="statistic-overlay"></div>
			<div class="container">
				<div class="statistic-inner">
					<div class="statistic-posts">
						<div class="owl-two owl-carousel owl-theme" style="font-size:19px;">
							<!--<div class="post" >-->
							<!--	<span data-count="600" class="timer">+0</span>-->
							<!--	<p>-->
							<!--		اشتغال مستقیم-->
							<!--		</p>-->
							<!--</div>-->
							<div class="post">
								<span data-count="{{DB::table('startups')->count()}}" class="timer">0</span>
								<p>
									شرکت نوپا
									</p>
							</div>
							<div class="post">
								<span data-count="{{DB::table('cmorgh_teams')->count()+120}}" class="timer">0</span>
								<p>
									تیم‌های بررسی شده
									</p>
							</div>
							<div class="post">
								<span data-count="18" class="timer">0</span>
								<p>
									مربیان
									</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimionials -->
		<!-- Our Team -->
		@include('includes.30morgh.team')
		<!-- Our Team -->
		<!-- Statistic -->
	
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
<script src="js/timeLine.min.js"></script>
<script>
$('.timeLine').timeLine({
  mainColor: '#7A2589',
        opacity: '0.85',
        lineColor: '#fafafa',
  offset: '200',
  itemAnimateDuration: 1,
  lineColor: '#DDDDDD',
  RightAnimation: 'bounceInRight',
  LeftAnimation: 'bounceInLeft',
});
 
</script>

@endsection