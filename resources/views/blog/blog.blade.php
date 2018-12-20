@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس: تازه‌ها
@endsection

@section('styles')
<style>
	.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
    background-color: #9C27B0;
    border-color: #9C27B0;
}
.post-txt {
    line-height: 28px;
    font-size: 110%;
    margin-top:10px;
}
</style>

@endsection

@section('content')
 	@include('blog.header')

    <div class="blog" >
			<a href="blog4.html#" id="blog-content"></a>
			<div class="container" style="margin-top:100px">
				<div class="row">
				    
					<div class="col-md-9 col-sm-12">
						<div class="page-title" >
							<h2 style="direction:rtl;text-align:center">
							    تازه‌های یاس
							</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-12"></div>
				</div>
				<div class="row">
				    
					<div class="col-md-9 content">
					   @foreach($posts as $post)
						<div class="blog-post" style="border: 2px #9C27B0 solid;">
							<div class="post-img">
								<a href="{{route('blog.post',$post->slug)}}">
								<img src="/photos/blog/{{$post->photo}}" alt="">
								</a>
							</div>
							<div class="post-content">
								<h3 class="title">
									<a href="{{route('blog.post',$post->slug)}}">{{$post->title}}</a>
								</h3>
								<div class="post-info">
									<div class="blog-author">
									نوشته شده توسط
										 <a href="{{route('blog.post',$post->slug)}}">
										 {{$post->writer}}
										 </a>
									</div>
									<div class="posted">
									    ،
										 <a href="{{route('blog.post',$post->slug)}}">
										     {{jDate::forge($post->created_at->diffForHumans())->ago()}}
										 </a>
									</div>
								</div>
								<div class="post-txt">
								    <div style=" text-align:justify;font-family:IranSans">
								       {!!$post->short_desc!!} 
								    </div>
								</div>
								<div class="btn-more pull-left" style="direction:ltr !important;font-family:IranSans">
									<a href="{{route('blog.post',$post->slug)}}">
								ادامه مطلب
									</a>
									
								</div>
								<div style="clear:both"></div>
								
							</div>
							
						</div>
					   @endforeach
					   <div class="text-center" style="direction:ltr">
					   	{{ $posts->links() }}
					   </div>
						
					</div>
					<div class="col-md-3 sidebar">
						<div class="sidebar-content" >
							<h5 style="font-size:160%">
						آخرین مطالب
							</h5>
							<ul style="margin-top:30px;">
							   @foreach($titles as $title)
								<li ><a style="font-size:130%;" href="{{route('blog.post',$title->slug)}}" >{{$title->title}}</a></li>
							   @endforeach	
							</ul>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		<!-- Blog -->
		
	


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
<script type="text/javascript">
    $(document).ready(function() {
        $("img").addClass("img-responsive");
});
</script>
@endsection