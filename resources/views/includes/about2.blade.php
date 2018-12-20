

<div class="second-about" >
	<!--<div class="foo"> Foo </div>-->
<a href="#" id="about"></a>
<div class="container foo">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-12">
			<div class="page-title" calss="topreveal">
				<h2 class="">
				به تیم یاس با بیش از یک دهه تجربه
					<br>
				ملحق شوید
					</h2>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2 about-info">
			<p style="font-size:17px" class="foo">
مرکز نوآوری یاس به عنوان یک نهاد خصوصی تسهیلگر خلق و راه اندازی کار و کسب‌های نوپا با چهار واحد سیمرغ، هما، هدهد و ققنوس در این مسیر حرکت می کند.
ما استارتاپ ها را با شبکه ی بزرگ و موفق مربیان، سرمایه گذاران و شرکت‌های خود وصل می‌کنیم و تجارب آن ها را در اختیار آن ها می‌گذاریم.
</p>
		</div>
	</div>
	<!--<div class="about-img " >-->
	<!--	<img src="/assets/images/idea3.jpg" alt="">-->
	<!--</div>-->
</div>
</div>
<div class="owl-eight owl-carousel owl-theme grid" style=""> 
@foreach($posts as $post)

	<div class="container3">
		<a href="{{route('blog.post',$post->slug)}}">
		  <img src="/photos/blog/{{$post->photo}}" alt="{{$post->slug}}" style="width:100%;">
		  <div class="content3">
		    <h3>{{$post->title}}</h3>
		    <p>{!!$post->short_desc!!} </p>
		  </div>
	  </a>
	</div>

@endforeach
</div>


<div class="call-to-action">
    <div class="container">
	    <div class="color-5">
    		<p>
    			<a href="{{route('30morgh.add_team')}}" class="btn btn-5 btn-5a icon-cart" style="padding-top: 10px;"><span style="font-size:25px">
    				به صف جنگجویان
    				<br>
    				تغییر سرنوشت ملحق شوید.
    				</span></a>
    		</p>
    	</div>
    </div>
</div>
	@include('includes.30morgh.team')