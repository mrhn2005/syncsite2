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
                    @include('includes.messages')
                     <h1 class="page-header">
                      استارتاپ های ثبت نامی
                    
                    </h1>
                    <a class="btn btn-success" href="{{route('filename.index')}}">
                        افزودن عنوان فایل آپلودی
                    </a>
                    <div style="margin-bottom:30px;margin-left:30px">
                      
                      <table  class="table" style="margin-bottom:0px; font-size:105%">
                        <thead>
                          <tr>
                            <th>
                                ردیف
                            </th>
                            <th>
                                عنوان استارتاپ
                            </th>
                            <th>
                               مشاهده فعالیت ها
                            </th>
                            <th>
                                مشاهده فایل های آپلودی
                            </th>
                          </tr>
                        </thead>
                        <tbody id="uploads">
                            <?php $i=1; ?>
                            @foreach($teams as $team)
                              <tr>
                                <td id="counter">
                                    {{$i}}
                                </td>
                                <td>
                                    {{$team->name}}
                                </td>
                                <td>
                                    <a href="{{route('admin.teams.show',$team)}}">
                                        <icon class="fa fa-tasks" style="font-size:150%"></icon>
                                    </a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('admin.teams.upload',$team)}}">
                                        <icon class="fa fa-upload" style="font-size:150%"></icon>
                                    </a>
                                    
                                </td>
                                
                              </tr>
                              <?php $i=$i+1; ?>
                          @endforeach
                        </tbody>
                    </table>
                     
                    </div>  
                    
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