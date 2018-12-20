@extends('layouts.main')

@section('title')
{{$post->title}} - مرکز نوآوری و شتابدهنده یاس
@endsection

@section('styles')
<meta property="og:type" content="news"/>
<meta property="og:image" content="http://yasidea.ir/photos/blog/{{$post->photo}}"/>
<meta property="og:image:width" content="200" />
<meta property="og:image:height" content="200" />
<meta property="og:description" content="{!!$post->short_desc!!}"/>
<meta property="og:url" content="http://yasidea.ir/news/{{$post->slug}}" />
<meta property="og:site_name" content="مرکز نوآوری یاس - تازه ها"/>
<meta property="og:title" content="{{$post->title}}"/>
<style>
    .blog-post p{
    text-align:justify!important;
    color:#4d4d4d!important;
    line-height:31px!important;
    font-size:16px!important;
}
blockquote {
    background-color:#F7F7F7;
    border-right: 5px solid #F55035;
    border-left: 0px;
    font-family: 'BYekan';
    font-size: 17px !important;
}
.blog-bottom a{
    font-size:110% !important;
}

blockquote strong{
    color:#F55035;
}


th{
	text-align: right;
}
.blog-bottom div,.blog-bottom p{
    text-align:justify!important;
    color:#4d4d4d;
    line-height:31px;
    font-size:16px;
}
.blog-post ul {
    list-style-type: square;
    margin: 20px;
    color:#4d4d4d;
    line-height:26px;
    font-size:16px;
}

.blog-post a{
    font-weight:bold;
}
.title a{
    font-size:120%!important;
    line-height:50px!important;
}

.sidebar-content li{
    margin-bottom:18px;
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
					  
						<div class="blog-post" style="border: 2px #9C27B0 solid;">
							<div class="post-img">
								<a href="{{route('blog.post',$post->slug)}}">
								<img src="/photos/blog/{{$post->photo}}" alt="">
								</a>
							</div>
							<div class="post-content">
								<h1 class="title">
									<a href="{{route('blog.post',$post->slug)}}">{{$post->title}}</a>
								</h1>
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
								<hr>
								<div class="post-txt">
								    <div style=" text-align:justify;font-family:IranSans">
								       {!!$post->desc!!} 
								    </div>
								</div>
								
							</div>
						</div>
					   
						
					</div>
					<div class="col-md-3 sidebar">
						<div class="sidebar-content" >
							<h5 style="font-size:160%">
						آخرین مطالب
							</h5>
							<ul style="margin-top:30px;">
							   @foreach($posts as $post)
								<li ><a style="font-size:130%;" href="{{route('blog.post',$post->slug)}}">{{$post->title}}</a></li>
							   @endforeach	
							</ul>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		<!-- Blog -->
		<!-- Navigation -->

		


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