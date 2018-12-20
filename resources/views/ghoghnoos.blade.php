@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس: ققنوس
@endsection

@section('content')


		
		@include('includes.ghoghnoos.header')
		@include('includes.ghoghnoos.top')
		@include('includes.ghoghnoos.about')
		<!-- About -->
		<!-- Testimionials -->
		<div class="testimonials" style="background-image: url(assets/images/picture1.jpg); background-position: 0% 40%;">
			<div class="testimonials-overlay"></div>
			<div class="container">
				<div class="testimonials-inner">
					<h3 style="text-align:center;color:rgb(12, 180, 206);">
						کافه ایده
					</h3>
					<p>
کافه ایده در نظر دارد به آموزش و ترویج کارآفرینی بپردازد. در این کافه علاوه بر ایجاد فضایی شاد و مفرح در نظر داریم رویدادهایی چند ساعته جهت آشنایی مشتاقان و علاقهمندان کارآفرینی با اکوسیستم و فعالان حوزه کارآفرینی برگزار نماییم. این قبیل رویدادها زمینه آشنایی و دسترسی هرچه بیشتر به منابع بسیار ارزشمندی چون مربیان باتجربه که خود مسیر پرپیچ و خم کارآفرینی رارفته‌اند ،کارآفرینان برگزیده کشور، سرمایه گذاران و …. رابرای علاقمندان به خلق کسب و کارهای پایدار فراهم می‌آورند. در واقع اجزای سازنده اکوسیستم کارآفرینی درجریان این قبیل رویدادهای کوتاه مدت ارتباطات خود را تقویت می‌نمایند. البته ناگفته نماند برخی از رویدادهای این کافه این پتانسیل رادارند که منجر به طرح ایده‌هایی از سوی شرکنندگان گردد.
					</p>
					
				</div>
			</div>
		</div>
		<!-- Testimionials -->
		<!-- Our Team -->
		@include('includes.ghoghnoos.team')
		<!-- Our Team -->
		<!-- Statistic -->
		<!-- Statistic -->
		<!-- Work -->
		<!-- Work -->
		<!-- Services -->

		<!-- Clients -->
		<!-- Call to Action -->
		
		<!-- Call to Action -->
		<!-- Contact -->


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
	if(hash=='services') {
		window.onload = function() {
		    document.getElementById("serveices-click").click();
		};
		window.location.hash='';
		history.pushState("", document.title, window.location.pathname);
  } 
	
});
	
</script>
@endsection