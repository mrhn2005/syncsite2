<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="fa" class="no-js" style="height:100%!important">
	<head>
	    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111472260-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-111472260-1');
        </script>

		<!-- Document Settings -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   
    	<meta name="description" content="مرکز نوآوری یاس به عنوان یک نهاد خصوصی تسهیلگر خلق و راه اندازی کار و کسب‌های نوپا با چهار واحد شتابدهنده سیمرغ، هما، هدهد و ققنوس در این مسیر حرکت می کند. ما استارتاپ ها را با شبکه ی بزرگ و موفق مربیان، سرمایه گذاران و شرکت‌های خود وصل می‌کنیم و تجارب آن ها را در اختیار آن ها می‌گذاریم. به صف جنگجویان تغییر سرنوشت ملحق شوید."> 
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/assets/images/yaslogo.png" />
		<!-- Page Title -->
		<title>
			@yield('title')
		
		</title>
		<!-- Fonts -->
		<!--<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>-->
		<!--<link rel="stylesheet" href="/assets/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/css/et-line-icons.css">
		<!-- Styles -->
		<!--<link rel="stylesheet" href="/assets/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="/assets/css/component.css">
		<link rel="stylesheet" href="/assets/css/normalize.css">
		<link rel="stylesheet" href="/assets/css/component-button.css">
		<link rel="stylesheet" href="/assets/css/set2.css">
		<link rel="stylesheet" href="/assets/css/settings.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<!--<link rel="stylesheet" href="css/bootstrap-rtl.css">-->
		<link rel="stylesheet" href="/owlcarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="/owlcarousel/owl.theme.default.min.css">
		<link rel="stylesheet" href="/owlcarousel/owl.theme.green.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" type="text/css" />
		    <link href='https://api.cedarmaps.com/cedarmaps.js/v1.8.0/cedarmaps.css' rel='stylesheet' />

		<!--<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">-->
		<!-- Script -->
		<!--<script src="/assets/js/modernizr.custom.js"></script>-->
		
		<link rel="stylesheet" href="/css/myhome.css">
		@yield('styles')
		<style>
			.btn4 {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    /*    #sidenav {*/
    /*    position: fixed;*/
    /*    right: 18px;*/
    /*    top: 15px;*/
    /*    font-size: 38px;*/
    /*    cursor: pointer;*/
    /*    z-index: 99999;*/
    /*}*/
		</style>
	</head>
	<body style="height:100%!important">
	 <!--   <div class="loader">-->
		<!--	<div class="spinner">-->
		<!--		<div class="double-bounce1"></div>-->
		<!--		<div class="double-bounce2"></div>-->
		<!--	</div>-->
		<!--</div>-->
@yield('content')
@include('includes.fixed-message')
@include('includes.error-message')

		<!-- Contact -->
		<!-- Footer -->
@yield('footer')
		<!-- Footer -->
		<!-- Scripts -->
		
		<script src="/assets/js/jquery-1.11.3.js"></script>

		<script src="/assets/js/jquery.countTo.js"></script>
		<script src="/assets/js/jquery.inview.min.js"></script>
		<!--<script src="/assets/js/isotope.pkgd.js"></script>-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
		<script src="/assets/js/classie.js"></script>
		<script src="/assets/js/TweenLite.min.js"></script>
		<script src="/assets/js/EasePack.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
	
		
		<script src="/assets/js/rAF.js"></script>
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="/assets/js/jquery.scrollspy.js"></script>
		<script src="/assets/js/website-smooth-scroll.js"></script>
		<script src="/assets/js/jquery.smooth-scroll.js"></script>
		<script src="/assets/js/main.js"></script>

		<!--<script src="/owlcarousel/owl.carousel.js"></script>-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
		
		
		<script src="/owlcarousel/custom.js"></script>
		<script>
			$(document).ready(function(){
			  $(".owl-carousel").owlCarousel();
			});
		</script>

		<!--<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>-->
<script>

 $(document).ready(function(){
	 
   $(function() {
  //AOS.init();
});

// $(window).on('load', function() {
//   AOS.refresh();
// }); 

	// if(window.location.hash) {
 //     var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
      
 //     $('html, body').stop().animate({ 
 //     scrollTop: $('#'+hash).offset().top
 // }, 800);
 //   //   $("body, html").animate({ 
 //   //   scrollTop: $( $('#work')).offset().top 
 //   // }, 1200);
 //   // document.getElementById(hash).scrollIntoView({block: 'start', behavior: 'smooth'});
 // } else {
 //     // No hash found
 // }

  });
  


    lightbox.option({
      
      'albumLabel': "",
      'wrapAround':	true,
    })


function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script> 


		@yield('js')
		@include('includes.sidebar')
	</body>
</html>
