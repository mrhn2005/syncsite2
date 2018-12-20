@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس: هدهد
@endsection

@section('content')

		
		@include('includes.hodhod.header')
		@include('includes.hodhod.top')
		@include('includes.hodhod.about')
		<!-- About -->
		<!-- Testimionials -->
		<div class="testimonials" style="background-image: url(assets/images/picture1.jpg); background-position: 0% 40%;">
			<div class="testimonials-overlay"></div>
			<div class="container">
				<div class="testimonials-inner">
					<h3 style="text-align:center;color:rgb(12, 180, 206);">
رویدادهای مساله محور بارش
					</h3>
					<p>
به منظور حل مسائل و چالش های صنایع گوناگون رویدادهای متنوعی بر بستر طرح بارش و به درخواست صاحبین صنایع طراحی و برگزار می گردند. برخی از فعالیت های این مجموعه در طرح بارش به قرار زیر می باشند:
<br>
طراحی و برگزاری رویداد دانشبازی، به درخواست شرکت فن آموز، سازنده پارک های علمی تفریحی 
<br>
طراحی رویداد دست به دست با موضوع كارآفريني،  ايجاد و توسعه كسب و كارهاي روستايي.

					</p>
					
				</div>
			</div>
		</div>
		<!-- Testimionials -->
		<!-- Our Team -->
		@include('includes.hodhod.team')
		<!-- Our Team -->
		<!-- Statistic -->
	
	
	
		

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
	if(hash=='events') {
		window.onload = function() {
		    document.getElementById("events-link").click();
		};
		window.location.hash='';
		history.pushState("", document.title, window.location.pathname);
  } 
	
});
	
</script>
@endsection