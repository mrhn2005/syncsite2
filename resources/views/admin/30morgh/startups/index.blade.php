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
                      استازتاپ‌ها
                    
                    </h1>
                    <div style="margin-bottom:30px">
                      <a href="{{route('startup.create')}}" class="btn btn-success">
                          افزودن استارتاپ جدید
                      </a>
                    </div>  
                    <table class="table table-hover" style="font-size:120%">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                               <th>
                                   نام استارتاپ
                                 </th>
                               <th>
                                   لگو
                                </th>
                               <th>
                                  عکس توضیحات
                                </th>
                                <th>
                                  توضیحات
                                </th>
                                <th>
                                  لینک
                                </th>
                                <th>
                                 حذف
                                </th>
                               
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($startups as $startup)
                                <form method="post" action="{{route('startup.destroy',$startup)}}" id="delete{{$startup->id}}"></form> 
                                <input type="hidden" name="_method" value="DELETE" form="delete{{$startup->id}}" >
                                <tr>
                                   <td>{{$startup->id}}</td>
                                   <td>{{$startup->name}}</td>
                                   
                                   <td>
                                       <img style="height:100px" class="hover-startup"  src="{{$startup->logo ? '/photos/30morgh/startups/'.$startup->logo : 'http://placehold.it/400x400' }}" alt="img18"/>
                                    </td>
                                   <td>
                                     	<a href="{{$startup->photo_desc ? '/photos/30morgh/startups/photo_desc/'.$startup->photo_desc : 'http://placehold.it/400x400' }}" data-lightbox="image-1" data-title="{{$startup->name}}">
            	        					<img style="height:100px" class="hover-startup"  src="{{$startup->photo_desc ? '/photos/30morgh/startups/photo_desc/'.$startup->photo_desc : 'http://placehold.it/400x400' }}" alt="img18"/>
            	        				</a>  
                                    </td>
                                    <td>{{$startup->description}}</td>
                                   <td><a href="{{$startup->link}}" target="_blank">{{$startup->link}}</a></td>
                                   <td>
                                     <button class="btn btn-danger" type="submit" form="delete{{$startup->id}}">
                                       <span class="glyphicon glyphicon-remove"></span>
                                     </button> 
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
 $('form').append('{{csrf_field()}}');
</script>
@endsection