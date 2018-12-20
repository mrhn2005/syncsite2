@extends('admin.layout.auth')

@section('style')
<style>
    tr{
        cursor:pointer!important;
    }
</style>
    
@endsection

@section('content')
        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    
                     <h1 class="page-header">
                     همه پست‌ها
                    
                    </h1>
  
                    <table class="table table-hover" style="font-size:120%">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                               <th>
                                   عنوان 
                                 </th>
                               <th>
                                   نام نویسنده
                                </th>
                               <th>
                                  زمان انتشار
                                </th>
                                <th>
                                  حدف پست
                                </th>
                                <th>
                                  
                                  مشاهده پست
                                </th>
                               
                          </tr>
                        </thead>
                        <tbody style="color:#A94442">
                            @foreach ($posts as $post)
                            <form method="post" action="{{route('blog.destroy',$post->id)}}" id="delete{{$post->id}}"> </form>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" form="delete{{$post->id}}">
                            <input type="hidden" name="_method" value="DELETE" form="delete{{$post->id}}" >
                                <tr class='clickable-row' data-href="{{route('blog.edit',$post->id)}}">
                                   <td>{{$post->id}}</td>
                                   <td>{{$post->title}}</td>
                                   
                                   <td>{{$post->writer}}</td>
                                   <td> {{jDate::forge($post->created_at->diffForHumans())->ago()}}</td>
                                   <td>
                        	         <button class="btn btn-danger" type="submit" form="delete{{$post->id}}">
                                       <span class="glyphicon glyphicon-remove"></span>
                                    </button> 
                        	       </td>
                        	       <td> 
                        	           <a href="{{route('blog.post',$post->id)}}" >
                        	               <i class="fa fa-eye fa-5" style="font-size:30px;color:green;"></i>
                        	           </a>
                        	       </td>
                                </tr>
                            
                            @endforeach
                      </tbody>
                    </table>   
                </div>
            </section>
        </section>
@endsection

@section('js')
<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
@endsection