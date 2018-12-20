@extends('layouts.main')

@section('title')
		مرکز نوآوری یاس و شتابدهنده سیمرغ - شتابدهی و سرمایه گذاری استارتاپ ها و کسب و کارهای نوپا

@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href='https://api.cedarmaps.com/cedarmaps.js/v1.8.0/cedarmaps.css' rel='stylesheet' />




<style>
#map_8334z9 {
    position: relative;
    width: 600px;
    height: 400px;
    max-width: 100%;
  }
.container3 {
	text-align:justify;
	margin:auto;
    position: relative; 
    max-width: 65%; /* Maximum width 
    margin: 0 auto; /* Center it */
}

.container3 .content3 {
    position: absolute; /* Position the background text */
    bottom: 0; /* At the bottom. Use top:0 to append it to the top */
    background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
    color: #f1f1f1; /* Grey text */
    width: 100%; /* Full width */
    padding: 10px; /* Some padding */
}
.content3 p{
	font-family:'IranSans';
	font-size:105%;
	line-height:28px;
}
@media screen and (max-width: 1200px) {
    .content3 p {
        display:none;
    }
     .content3 p {
        display:none;
    }
    .content3 h3 {
        font-size: 100%;
    }
}
	body, html {
    height: 100% !important;
    margin: 0 !important;
}
.owl-eight {
position: relative;
}
.owl-prev,
.owl-next {
position: absolute;
top: 50%;
margin-top: -10px; 
}
.owl-prev {
right: 12%;
}
.owl-next {
left: 12%;
}
.main-text
{
    position: absolute;
    top: 100px;
    width: 100%;
    color: #FFF;
}
.btn-min-block
{
    min-width: 170px;
    line-height: 26px;
}
.btn-clear
{
    color: #FFF;
    background-color: transparent;
    border-color: #FFF;
    margin-right: 15px;
}
.btn-clear:hover
{
    color: #000;
    background-color: #FFF;
}
.container-top {
	width: 100% !important;
	padding: 0px !important;
}
.carousel-top {
  max-height: 100vh;
}
.item-top {
  max-height: 100vh
}

.main-text h1{
	font-size:500%;font-weight:bold;
}

.main-text h3{
	font-size: 200%;font-weight:bold;
}

@media only screen and (max-width: 500px) {
  .img {
    height: 100vh;
  }
}
@media screen and (max-width: 700px) {
  #first-header {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  }
  .main-text
	{
	    position: absolute;
	    top: 80px;
	    width: 100%;
	    color: #FFF;
	}
	.main-text h1{
	font-size:350%;font-weight:bold;
	}
	
	.main-text h3{
		font-size: 150%;font-weight:bold;
	}
}

@media screen and (max-height: 450px) {

	.main-text{
		display:none;
	}
}
.carousel-caption{
	padding-bottom:120px;
}
.carousel-caption p{
	padding-top:20px;
	font-size:120%;
}

.carousel-caption a{
	
	font-size:180%!important;
	font-weight: bold!important;
	min-width: 200px;
}

.carousel-caption h3{
	font-size:200%;
}

.myplaceholder { height: 1200px; width: 400px; }
.carousel-inner { background: black url("yasidea2.jpg") no-repeat fixed center; 
filter: grayscale(50%);}

.button {
 padding:10px 15px;   
}
</style>

@endsection


@section('content')
<!--<div class="bg" style="z-index:100000"></div>-->
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

		
		@include('includes.header')
		@include('includes.top3')
		@include('includes.about2')
		

		<!-- <div class="timeLine">
		<!-- About -->
		<!-- Testimionials -->
		<div class="testimonials foo" style="background-image: url(assets/images/picture1.jpg); background-position: 0% 40%;">
			<div class="testimonials-overlay"></div>
			<div class="container">
				<div class="testimonials-inner">
					<h3 style="text-align:center;color:rgb(12, 180, 206);">
					یاس راهی برای اتصال سرمایه گذاران مادی و معنوی به یکدیگر
					</h3>
					<p>
					شما که سرمایه مالی و ظرفیت سرمایه گذاری روی کار و کسب های نوپا را دارید، سرمایه گذار مالی هستید
					<br>
					شما که دغدغه، مهارت و انرژی لازم برای شروع کار و کسب نوپا را دارید نیز از دیدگاه ما سرمایه گذارید...
					<br>
					در فرایندی برای رسیدن به تقاطع سرمایه گذاری منتظرتان هستیم
					</p>
					
				</div>
			</div>
		</div>
		<!-- Testimionials -->
		<!-- Our Team -->
		@include('includes.team')
		<!-- Our Team -->
		<!-- Statistic -->

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
		<!-- Statistic -->
		<!-- Work -->
		<div class="work">
			<a href="#" id="work"></a>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-12" style="margin-bottom:20px;">
						<div class="page-title">
							<h2>
							تماس با یاس
								
								</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="members" style="margin-top:45px;">
						<div class="col-md-6">
							<h2 style="margin:20px;">
								اطلاعات تماس
								</h2>		
							<div class="w-tabs-section-header-h">
								<i class="fa fa-envelope-o fa-lg"></i>&nbsp;
								<span class="w-tabs-section-title">
									ایمیل:
									info@yasidea.ir
									</span>
									
							</div>
	
							<div class="w-tabs-section-header-h">
								<i class="fa fa-tty fa-lg"></i>&nbsp;
								<span class="w-tabs-section-title" >
									تلفن تماس:
	76250350-021
	
							
								</span>
							</div>
							
							<div class="w-tabs-section-header-h">
								<i class="fa fa-building fa-lg"></i>&nbsp;
								<span class="w-tabs-section-title" style="text-align:justify;font-size:16px;">
									آدرس:
									تهران - کیلومتر ۲۰ جاده دماوند - پارک فناوری پردیس - خیابان نوآوری دوم - پلاک ۲۳
								</span>
							</div>
							
							<div class="w-tabs-section-header-h">
								<i class="fa fa-paper-plane fa-lg"></i>&nbsp;
								<span class="w-tabs-section-title">
									کانال تلگرام:
									&nbsp;
									<a style="" href="https://telegram.me/joinchat/BY96aT-jnyiG3AtRJVbu8g" target="_blank">Hodhod_events@</a>
								</span>
							</div>
							
							</div>
						<div class="col-md-6">
						    <div id="map_8334z9"></div>
							
						</div>
					
					</div>	
					
				</div>
			</div>
		</div>
		<!-- Work -->
		<!-- Services -->

		<!-- Clients -->
		<!-- Call to Action -->
		
		<!-- Call to Action -->
		<!-- Contact -->
		<div class="contact" style="background-image: url(assets/images/picture1.jpg);background-position: 0% 30%;">
			<a href="#" id="contact"></a>
			<div class="contact-overlay"></div>
			<div class="container">
				<div class="contact-inner">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-12">
							<div class="page-title">
								<h2>
									سوال‌ها و درخواستهایتان را
									<br>
									با ما در میان بگذارید
								</h2>
							</div>
						</div>
					</div>
					<div class="contact-form">
						<div class="col-md-8 col-md-offset-2">
							<div class="input">
								<div class="col-md-4 col-sm-4">
									<input name="name" type="text" placeholder="نام">
								</div>
								<div class="col-md-4 col-sm-4">
									<input name="email" type="text" placeholder="ایمیل">
								</div>
								<div class="col-md-4 col-sm-4">
									<input name="phone" type="text" placeholder="تلفن">
								</div>
							</div>
							<textarea name="request" placeholder="پیام شما" cols="30" rows="10" required></textarea>
							<input class="submit" name="submit_request" type="submit" value="ارسال پیام">
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
@section('js')

<script src="assets/js/demo-1.js"></script>
<!--<script src="js/timeLine.min.js"></script>-->
<!--<script src="js/timeline2.js"></script>-->
<!--<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>-->
<script>

 $(document).ready(function(){
       $('.bg').hide();
      
       $('#first-top').fadeIn("slow");
        $('#first-header').fadeIn("slow");
        $('#first-messenger').fadeIn("slow");
        $('#top-h').addClass('animated bounceInRight');
        $("input[name = 'submit_request']").click(function(){
        $.ajax({
          url: "{{route('question.add')}}",
          method: 'post',
          data:{
            name: $("input[name = 'name']").val(),
            phone: $("input[name = 'phone']").val(),
            email: $("input[name = 'email']").val(),
            request: $("textarea[name = 'request']").val(),
            _token: "{{csrf_token()}}"
          },
          success: function(response){
          	console.log(response);
              $("#fixed-message").text(response);
              //$("#mini-cart").html(response);
              $(".myAlert-top2").show();
               
              setTimeout(function(){
                    $(".myAlert-top2").hide(); 
                  }, 4000);
               
            // if(group.id!=null){
            //   $(".group-input").removeClass('has-error').val('');
            //   $("#error-message").text('');
            //     $("#group-name").hide(500);
            //     var newOption=$('<option></option>').attr('value',group.id).attr('selected',true).text(group.name);
            //     $("select[name=group_id]").append(newOption);
              
            // }
          },
          error: function(xhr){
          	
            var errors=xhr.responseJSON;
            // var error=errors.name[0];
            console.log(errors);
            $("#fixed-message1").text('لطفا ابتدا پیام خود را ثبت کنید');
              //$("#mini-cart").html(response);
              $(".myAlert-top1").show();
               
              setTimeout(function(){
                    $(".myAlert-top1").hide(); 
                  }, 4000);
            // if(error){
            //   $(".group-input")
            //     .addClass('has-error');
            //   $("#error-message").text(error);
            //   $("#group-input").focus();
            // }
          }
          
          
        });
   
    });
 });
// 	window.sr = ScrollReveal();

// // Customizing a reveal set
//   sr.reveal('.foo', { duration: 2000 });
//   sr.reveal('.left-anime', { duration: 4000,origin: 'left', distance: '40px',});
//   sr.reveal('.right-anime', { duration: 4000,origin: 'right', distance: '40px',});
//   sr.reveal('.rotateanime', { duration: 2000,rotate: { x: 0, y: 90, z: 0}});
  
</script>
<script>
  function contactMap() {
    // Map options
    var cm_options = {"center":{"lat":35.73217821760717,"lng":51.82551383972168},"maptype":"light","scrollWheelZoom":false,"zoomControl":true,"zoom":17,"minZoom":6,"maxZoom":17,"legendControl":false,"attributionControl":false}
    // Initialized CedarMap
    var map = window.L.cedarmaps.map('map_8334z9', 'https://api.cedarmaps.com/v1/tiles/cedarmaps.streets.json?access_token=48bb60655ca29fbe1b2989458f21dffbfe5a3e4b', cm_options);
    // Markers options
    var markers = [{"popupContent":"موقعیت مکانی شما","center":{"lat":35.73217821760717,"lng":51.82551383972168},"iconOpts":{"iconUrl":"https://api.cedarmaps.com/v1/markers/marker-default.png","iconRetinaUrl":"https://api.cedarmaps.com/v1/markers/marker-default@2x.png","iconSize":[82,98]}}];
    var markersLeaflet = [];
    var _marker = null;

    map.setView(cm_options.center, cm_options.zoom);
    // Add Markers on Map
    if (markers.length === 0) return;
    markers.map(function(marker) {
      var iconOpts = {
        iconUrl: marker.iconOpts.iconUrl,
        iconRetinaUrl: marker.iconOpts.iconRetinaUrl,
        iconSize: marker.iconOpts.iconSize,
        popupAnchor: [0, -49]
      };

      const markerIcon = {
        icon: window.L.icon(iconOpts)
      };

      _marker = new window.L.marker(marker.center, markerIcon);
      markersLeaflet.push(_marker);
      if (marker.popupContent) {
        _marker.bindPopup(marker.popupContent);
      }
      _marker.addTo(map);
    });
    // Bounding Map to Markers
    if (markers.length > 1) {
      var group = new window.L.featureGroup(markersLeaflet);
      map.fitBounds(group.getBounds(), { padding: [30, 30] });
    }
  };
  
  (function(c,e,d,a){
    var p = c.createElement(e);
    p.async = 1; p.src = d;
    p.onload = a;
    c.body.appendChild(p);
  })(document, 'script', 'https://api.cedarmaps.com/cedarmaps.js/v1.8.0/cedarmaps.js', contactMap);
  $("#first-header").css('display','none');
   
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('#first-header').css('display', 'none');
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
	var currentScrollPos = window.pageYOffset;
	  if (prevScrollpos > currentScrollPos) {
	  	$("#first-header").css('display', 'block');
	    document.getElementById("first-header").style.top = "-80px";
	  } else {
	  	$("#first-header").css('display', 'block');
	    document.getElementById("first-header").style.top = "0px";
	  }
	  prevScrollpos = currentScrollPos;
	}
}

	$("header").addClass('header-show');

</script>
@endsection