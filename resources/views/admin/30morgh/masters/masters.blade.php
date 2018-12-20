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
                       همه منتورهای ثبت نامی
                    
                    </h1>
  
                    <table class="table table-hover" style="font-size:120%">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                               <th>
                                   نام منتور
                                 </th>
                               <th>
                                   شماره تماس
                                </th>
                               <th>
                                  مدرک تحصیلی
                                </th>
                               
                          </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($masters as $master)
                            
                                <tr class='clickable-row' data-href="{{route('masters.show',$master)}}">
                                   <td>{{$i}}</td>
                                   <td>{{$master->first_name}} {{$master->last_name}}</td>
                                   
                                   <td>{{$master->mobile}}</td>
                                   <td>{{$master->degree}}</td>
                                </tr>
                            <?php $i=$i+1; ?>
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