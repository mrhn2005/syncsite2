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
                      کارگاه ها یا رویدادها
                    
                    </h1>
                    <div style="margin-bottom:30px">
                      <a href="{{route('workshop.create')}}" class="btn btn-success">
                          افزودن کارگاه یا رویداد جدید
                      </a>
                    </div>  
                    <table class="table table-hover" style="font-size:120%">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                                <th>
                                  نوع
                                </th>
                               <th>
                                  نام کارگاه یا رویداد
                                 </th>
                               <th>
                                  پوستر 
                                </th>
                               <th>
                                  توضیحات 
                                </th>
                                <th>
                                   تاریخ برگزاری 
                                </th>
                                <th>
                                 وضعیت برگزاری
                                </th>
                                <th>
                                    ویرایش
                                </th>
                                <th>
                                    حذف
                                </th>
                               
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pastWorkshops as $pastWorkshop)
                                <form method="post" action="{{route('workshop.destroy',$pastWorkshop->id)}}" id="delete{{$pastWorkshop->id}}"></form> 
                                <form method="post" action="{{route('workshop.update_active',$pastWorkshop->id)}}" id="update_active{{$pastWorkshop->id}}"></form> 
                                
                                <input type="hidden" name="_method" value="DELETE" form="delete{{$pastWorkshop->id}}" >
                                
                                <tr>
                                   <td>{{$pastWorkshop->id}}</td>
                                   <td>{{$pastWorkshop->event==0?'کارگاه':'رویداد'}}</td>
                                   <td>{{$pastWorkshop->name}}</td>
                                   
                                   <td>
                                       <img style="height:100px" class="hover-post"  src="{{$pastWorkshop->poster ? '/photos/homa/past_workshops/'.$pastWorkshop->poster : 'http://placehold.it/400x400' }}" alt="img18"/>
                                    </td>
                                   <td>
                                     {{$pastWorkshop->desc}}	  
                                    </td>
                                   <td>{{$pastWorkshop->date}}</td>
                                   
                                   @if($pastWorkshop->active==1)
                                       <td>
                                         <button class="btn btn-success" type="submit" form="update_active{{$pastWorkshop->id}}">
                                           فعال است
                                         </button> 
                                       </td>
                                   
                                   @else
                                        <td>
                                            برگزار شد  
                                        </td>
                                   @endif
                                   
                                   <td>
                                     <a class="btn btn-primary" type="submit" href="{{route('workshop.edit',$pastWorkshop->id)}}">
                                       <span class="glyphicon glyphicon-edit"></span>
                                     </a> 
                                   </td>
                                   <td>
                                     <button class="btn btn-danger" type="submit" form="delete{{$pastWorkshop->id}}">
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