<div  class="ourteam">
	<a href="#" name="ourteam" id="ourteam"></a>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-12">
				<div class="page-title">
					<h2>
					برخی از استارتاپ‌های
						<br>
						شتابدهنده سیمرغ
						</h2>
				</div>
			</div>
		</div>

		<div class="members" style="direction:ltr!important;">
			<div class="owl-six owl-carousel owl-theme grid">
				@foreach($startups as $startup)
					
				
	    		    <!--<a href="{{$startup->link}}" target="_blank">-->
	        			<div class="member">
	        				<a href="{{$startup->photo_desc ? '/photos/30morgh/startups/photo_desc/'.$startup->photo_desc : 'http://placehold.it/400x400' }}" data-lightbox="image-1" data-title="{{$startup->name}}">
	        					<img class="hover-startup"  src="{{$startup->logo ? '/photos/30morgh/startups/'.$startup->logo : 'http://placehold.it/400x400' }}" alt="img18"/>
	        				</a>

	        				<div class="caption hover-startup-name">
	    
	        		          <p style="margin-top:20px;font-size:120%">
	        		          	@if(!empty($startup->link))
		        		          <a href="{{$startup->link}}"  target="_blank">
		        		         {{$startup->name}}	
		        		         </a>
		        		        @else
		        		        	{{$startup->name}}
		        		        @endif
	        		          </p>
	        		          <p>{{$startup->description}}</p>
	        		        </div>
	        			</div>
	        		
	        		
				@endforeach

			</div>
		</div>
	</div>
</div>