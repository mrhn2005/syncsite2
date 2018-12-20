@extends('admin.layout.auth')

@section('style')
<style>

</style>
    
@endsection

@section('content')
        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    
                     <h1 class="page-header">
                      ثبت نام کنندگان
                    
                    </h1>
                    <table class="table table-hover" style="font-size:120%">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                                <th>
                                  نام
                                </th>
                               <th>
                                  نام خانوادگی
                                 </th>
                               <th>
                                 شماره موبایل
                                </th>
                               <th>
                                 ایمیل
                                </th>
                                <th>
                                   نام رویداد
                                </th>
                                <th>
                                 وضعیت پرداخت
                                </th>
                                <th>
                                 طریقه آشنایی
                                </th>
                                <th>
                                 رشته تحصیلی
                                </th>
                                <th>
                                 میزان تحصیلات
                                </th>
                                <th>
                                 شهر محل سکونت
                                </th>
                                <th>
                                    کد پیگیری
                                </th>
                               
                          </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($participants as $participant)
                                
                                <tr>
                                   <td>{{$i}}</td>
                                   <td>{{$participant->first_name}}</td>
                                   <td>{{$participant->last_name}}</td>
                                   <td>{{$participant->phone}}</td>
                                   <td>{{$participant->email}}</td>
                                   <td>{{$participant->event->name}}</td>
                                   <td>{{count($participant->transaction)?$participant->transaction->status:''}}</td>
                                   <td>{{$participant->know}}</td>
                                   <td>{{$participant->field}}</td>
                                   <td>{{$participant->degree}}</td>
                                   <td>{{$participant->city}}</td>
                                   <td>{{$participant->transaction->factorNumber}}</td>
                                   
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
 $('form').append('{{csrf_field()}}');
</script>
@endsection