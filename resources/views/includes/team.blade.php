<!--<div  class="ourteam" data-aos="zoom-in-up" data-aos-duration="3000">-->
<div  class="ourteam" >
	<a href="#" name="ourteam" id="services"></a>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-12">
				<div class="page-title">
					<h2>
					برخی از مربیان
						<br>
					مرکز نوآوری یاس
						</h2>
				</div>
			</div>
		</div>

		<div class="members foo">
			<div class="owl-one owl-carousel owl-theme grid ">
				@foreach($mentors as $mentor)
		    	<div class="member ">
					<figure class="effect-apollo " style="border-radius:6%">
						<img src="{{$mentor->photo ? '/photos/mentors/'.$mentor->photo : 'http://placehold.it/400x400' }}" alt="img18" style="filter: grayscale(20%)"/>
						<figcaption>
							<!--<h2>-->
							<!--	{{$mentor->name}}-->
							<!--</h2>-->
							<ul class="social-icons">
								<li>{{$mentor->name}}</li>
								<li style="font-size:65%;color:#cccccc;padding-top:5px;">{{$mentor->post}}</li>
							</ul>
						</figcaption>
					</figure>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</div>