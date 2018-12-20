@foreach($events as $event)
<div id="fsModal{{$event->id}}"
     class="modal animated bounceIn"
     tabindex="-1"
     role="dialog"
     aria-labelledby="myModalLabel"
     aria-hidden="true" style="z-index:999999;padding-right:0px">

  <!-- dialog -->
  <div class="modal-dialog">

    <!-- content -->
    <div class="modal-content">

      <!-- header -->
      <!--<div class="modal-header">-->
      <!--  <h1 id="myModalLabel"-->
      <!--      class="modal-title">-->
      <!--    Modal title-->
      <!--  </h1>-->
      <!--</div>-->
      <!-- header -->
      
      <!-- body -->
      <div class="modal-body">
         <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
        <div class="container">
            
            <h1 style="text-align:center;    font-weight: 700;margin:50px;font-size:40px;">
              {{$event->name}}  
              <img style="height:60px;" class="" src="{{$event->logo ? '/photos/hodhod/events/'.$event->logo : 'http://placehold.it/400x400' }}" alt="img18"/>
            </h1>
            	
            <div class="row">
                
                <div class="col-md-12" style="margin-top:10px; line-height: 200%;text-align:justify;">
                    <p style="text-align:justify; font-size:20px;">
                        {!! $event->desc !!}
                    </p>
             
                    <br>
                    <!--<div class="alert alert-success">-->
                    <!--    <h3>-->
                    <!--                    تاریخ اولین فراخوان پیش رو:-->
                    <!--        96/10/1-->
          
                    <!--    </h3>-->
                    <!-- </div>-->
                    <!-- <div class="text-center">-->
                    <!--    <button type="button" class="btn btn-info second-button btn1 btn-1 btn-1e" style="margin:auto;font-size:22px;cursor:not-allowed;">-->
                    <!--        ثبت نام در فراخوان-->
                    <!--    </button>-->
                    <!--</div>-->
                </div>
                
                <div class="col-md-12" style="margin-top:40px;">
                    <hr>
                    <div class="owl-five owl-carousel owl-theme grid" style="font-weight:bold">
    		    
        			<div class="member">
        				
        					<img class="" src="photos/hodhod/1.jpg" alt="img18"/>

    			</div>
    			<div class="member">
    				
    					<img src="photos/hodhod/2.jpg" alt="img18"/>

    			</div>
    			<div class="member">
    				
    					<img src="photos/hodhod/3.jpg" alt="img18"/>
    					

    			</div>
    			<div class="member">
    				
    					<img src="photos/hodhod/4.jpg" alt="img18"/>
  
    			</div>
    			<div class="member">
    				
    					<img src="photos/hodhod/5.jpg" alt="img18"/>
    					
    				
    			</div>
    		</div>
                </div>
                
            </div>
           
        </div>
            
        </div>        
        
      <!-- body -->

      <!-- footer -->
      <div class="modal-footer">
        <button class="btn btn1 btn-danger"
                data-dismiss="modal" style="float:left;font-size:22px">
          بستن
        </button>
        
      </div>
      <!-- footer -->

    </div>
    <!-- content -->

  </div>
  <!-- dialog -->

</div>
<!-- modal -->
@endforeach