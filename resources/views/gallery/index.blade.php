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



		
		@include('includes.30morgh.register.header')

		<!-- About -->
		<!-- Testimionials -->
<!-- Work -->
		<div class="work">
			<a href="index.html#" id="work"></a>
			<div class="container">
				<div class="row second-page-title">
					<div class="col-md-6 col-sm-12">
						<div class="page-title">
							<h2>Join our amazing <br> team with experience</h2>
						</div>
					</div>
					<div class="filters col-md-6">
						<ul id="filters">
						    <li class="active" data-filter="*">
						    همه
						    </li>
						    @foreach($galleries as $gallery)
							
							<li data-filter=".{{str_replace(' ','',$gallery->title)}}">{{$gallery->title}}</li>
							
							@endforeach
							<!--<li data-filter=".photography">Photography</li>-->
							<!--<li data-filter=".typography">Typography</li>-->
							<!--<li data-filter=".web">Web Design</li>-->
						</ul>
					</div>
				</div>
				<div class="work-inner">

					<div class="row work-posts grid">
					    @foreach($galleries as $gallery)
					    @foreach($gallery->photos as $photo)
						<div class="col-md-4 col-sm-4 {{str_replace(' ','',$gallery->title)}}">
							<div class="item">
								<a href="single.html">
									<figure class="effect-apollo">
										<img src="storage/{{$photo->image}}" alt="img18"/>
										<figcaption>
											<h2>Behance</h2>
											<div class="category">
												<span>Art Work</span>
											</div>
										</figcaption>
									</figure>
								</a>
							</div>
						</div>
						@endforeach
						@endforeach
						<!--<div class="col-md-4 col-sm-4 graphic photography">-->
						<!--	<div class="item">-->
						<!--		<a href="single.html">-->
						<!--			<figure class="effect-apollo">-->
						<!--				<img src="assets/images/work/11.png" alt="">-->
						<!--				<figcaption>-->
						<!--					<h2>Behance</h2>-->
						<!--					<div class="category">-->
						<!--						<span>Art Work</span>-->
						<!--					</div>-->
						<!--				</figcaption>-->
						<!--			</figure>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="col-md-4 col-sm-4 web">-->
						<!--	<div class="item">-->
						<!--		<a href="single.html">-->
						<!--			<figure class="effect-apollo">-->
						<!--				<img src="assets/images/work/3.jpg" alt="">-->
						<!--				<figcaption>-->
						<!--					<h2>Behance</h2>-->
						<!--					<div class="category">-->
						<!--						<span>Art Work</span>-->
						<!--					</div>-->
						<!--				</figcaption>-->
						<!--			</figure>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="col-md-4 col-sm-4 typography">-->
						<!--	<div class="item">-->
						<!--		<a href="single.html">-->
						<!--			<figure class="effect-apollo">-->
						<!--				<img src="assets/images/work/12.png" alt="">-->
						<!--				<figcaption>-->
						<!--					<h2>Behance</h2>-->
						<!--					<div class="category">-->
						<!--						<span>Art Work</span>-->
						<!--					</div>-->
						<!--				</figcaption>-->
						<!--			</figure>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="col-md-4 col-sm-4 typography web">-->
						<!--	<div class="item">-->
						<!--		<a href="single.html">-->
						<!--			<figure class="effect-apollo">-->
						<!--				<img src="assets/images/work/5.jpg" alt="">-->
						<!--				<figcaption>-->
						<!--					<h2>Behance</h2>-->
						<!--					<div class="category">-->
						<!--						<span>Art Work</span>-->
						<!--					</div>-->
						<!--				</figcaption>-->
						<!--			</figure>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="col-md-4 col-sm-4 graphic photography">-->
						<!--	<div class="item">-->
						<!--		<a href="single.html">-->
						<!--			<figure class="effect-apollo">-->
						<!--				<img src="assets/images/work/6.jpg" alt="">-->
						<!--				<figcaption>-->
						<!--					<h2>Behance</h2>-->
						<!--					<div class="category">-->
						<!--						<span>Art Work</span>-->
						<!--					</div>-->
						<!--				</figcaption>-->
						<!--			</figure>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="col-md-4 col-sm-4 web typography">-->
						<!--	<div class="item">-->
						<!--		<a href="single.html">-->
						<!--			<figure class="effect-apollo">-->
						<!--				<img src="assets/images/work/7.jpg" alt="">-->
						<!--				<figcaption>-->
						<!--					<h2>Behance</h2>-->
						<!--					<div class="category">-->
						<!--						<span>Art Work</span>-->
						<!--					</div>-->
						<!--				</figcaption>-->
						<!--			</figure>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="col-md-4 col-sm-4 photography">-->
						<!--	<div class="item">-->
						<!--		<a href="single.html">-->
						<!--			<figure class="effect-apollo">-->
						<!--				<img src="assets/images/work/1.jpg" alt="">-->
						<!--				<figcaption>-->
						<!--					<h2>Behance</h2>-->
						<!--					<div class="category">-->
						<!--						<span>Art Work</span>-->
						<!--					</div>-->
						<!--				</figcaption>-->
						<!--			</figure>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</div>-->
						<!--<div class="col-md-4 col-sm-4 graphic">-->
						<!--	<div class="item">-->
						<!--		<a href="single.html">-->
						<!--			<figure class="effect-apollo">-->
						<!--				<img src="assets/images/work/13.png" alt="">-->
						<!--				<figcaption>-->
						<!--					<h2>Behance</h2>-->
						<!--					<div class="category">-->
						<!--						<span>Art Work</span>-->
						<!--					</div>-->
						<!--				</figcaption>-->
						<!--			</figure>-->
						<!--		</a>-->
						<!--	</div>-->
						<!--</div>-->
					</div>
				</div>
			</div>
		</div>
		<!-- Work -->



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



@endsection