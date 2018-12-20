<div  class="ourteam">
	<a href="#" name="ourteam" id="ourteam"></a>
	<div class="container">
    	
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3 col-sm-12">
    			<div class="page-title">
    				<h2>
    			رویدادهای پیشرو
    			<br>

    					</h2>
    			</div>
    		</div>
    	</div>
    
  <div class="members" style="margin-top:20px;">

	<div class="row" style="padding-top:0px;">
		@foreach($workshops_past as $workshop_past)

	      @if($workshop_past->active==1)
		<div class="col-md-8 col-md-offset-2 about-info" style="text-align:center;">
			<h3>{{$workshop_past->name}}</h3>
			<p style="font-size:17px; color:#888888" >
			    
    			{{$workshop_past->desc}}
    			<br>
    			@if($workshop_past->payment)
        		<a href="{{route('event.register',$workshop_past->slug)}}" target="_blank" class="btn4 btn-success" style="font-size:140%">
                    ثبت نام
                </a>
                @elseif($workshop_past->register_link)
                	<a href="{{$workshop_past->register_link}}" target="_blank" class="btn4 btn-success" style="font-size:140%">
                    ثبت نام
                	</a>
        		@endif
    		</p>
    		
		</div>
		<div class="about-img" style="text-align:center">
			<a href="{{$workshop_past->poster ? '/photos/homa/past_workshops/'.$workshop_past->poster : 'http://placehold.it/400x400' }}" data-lightbox="image-9" data-title="
	    			{{$workshop_past->name}}
	    					"><img src="{{$workshop_past->poster ? '/photos/homa/past_workshops/'.$workshop_past->poster : 'http://placehold.it/400x400' }}" alt="img18"/></a>
		</div>
			@endif
		@endforeach
			
		</div>
			<br>
    </div>

</div>
     
</div>