@if(Session::has('success'))
    @extends('layouts.main')
    
    @section('title')
    	مرکز نوآوری یاس
    @endsection
    
    @section('styles')
    
    
    @endsection
    
    @section('content')
    
    		@include('includes.header1')
        <div class="blog-single second-about" style="height:1000px;" >
            <div class="container">
                
                <div class="row">
            		<div class="col-md-6 col-md-offset-3 col-sm-12">
            			<div class="page-title" style="padding-top:15%">
            				<h2>
            	{!! Session::get('success') !!}
            	
            	
            				</h2>
            			</div>
            		</div>
        	    </div>
        	    <div  class="row"  >
            		<div class="col-md-8 col-md-offset-2 about-info">
            		    <p style="font-size:17px;text-align:center; " >
                            <a href="/index.php">
                                برای رفتن به صفحه اصلی کلیک کنید.
                            </a>
                        </p>
                    </div>
                </div>
                
        
                
            </div>
            
        </div>
    
    @endsection
    
    @section('js')
    
    
    
    @endsection

@else

<?php header('Location: /');
exit;
?>
@endif

