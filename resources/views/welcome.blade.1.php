@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس

@endsection

@section('styles')
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style>
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
right: 15%;
}
.owl-next {
left: 15%;
}
</style>
@endsection


@section('content')
<div class="bg" style="z-index:100000"></div>
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
		@include('includes.top')
		@include('includes.about')
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
					<div class="owl-eight owl-carousel owl-theme grid" style="font-size:18px;font-weight:bold">
						@foreach($posts as $post)
							<div class="item">
							
							<h3 style="text-align:center;color:	#0EA3BC!important;font-size:160%">
							{{$post->title}}
							</h3>
							<div class="post-info">
								<div class="blog-author" style="font-size:70%; color:	#BA55D3">
								نوشته شده توسط
									 
									 {{$post->writer}}
									 ،
									 {{jDate::forge($post->created_at->diffForHumans())->ago()}}
								</div>
								
							</div>
							 <div class="post-txt">
							    <div style=" text-align:center">
							       {!!$post->short_desc!!} 
							    </div>
							</div>
							<div style="margin-top:20px;">
								<a href="{{route('blog.post',$post->slug)}}" style="color:#0EA3BC">
									ادامه مطلب...
								</a>
							</div>
						</div>
					@endforeach
				   </div>
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
							<div id="map" style="width:100%;height:400px;" style=""></div>
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
@endsection