@extends('admin.layout.auth')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" type="text/css" />
<style>
    body{
                
        direction:rtl !important;
        text-align:right !important;
    }
    .col-md-2{
        font-weight:bold;
    }
    
    th{
        text-align:right !important;
    }
    .row{
        margin-left: 0px;
         text-align: justify;
         font-size:110%;
    }
</style>
@endsection

@section('content')
        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    
                     <h1 class="page-header">
                      تیم: 
                      {{$team->team_name}}
                    
                    </h1>

                    <label for="name">
                         مشخصات اعضا تیم :
                        </label>
                   <div class="table-responsive">
                    <table  class="table" style="margin-bottom:0px; font-size:105%">
                        <thead>
                          <tr>
                            <th>
                                ردیف
                            </th>
                            <th>
                                نام و نام خانوادگی
                            </th>
                            <th>
                                شماره موبایل
                            </th>
                            <th>
                                پست الکترونیکی
                            </th>
                            <th>
                                شهر
                            </th>
                            <th>
                                دانشگاه
                            </th>
                            <th>
                               تاریخ تولد
                            </th>
                          </tr>
                        </thead>
                        <tbody id="members">
                            <?php $i=1; ?>
                            @foreach($team->members as $member)
                              <tr>
                                <td id="counter">
                                    {{$i}}
                                </td>
                                <td>
                                    {{$member->name}}
                                <td>
                                    {{$member->phone}}
                                </td>
                                <td>
                                    {{$member->email}}
                                </td>
                                <td>
                                    {{$member->city}}
                                </td>
                                <td>
                                    {{$member->university}}
                                </td>
                                <td>
                                    {{$member->birthday}}
                                </td>
                              </tr>
                              <?php $i=$i+1; ?>
                          @endforeach
                        </tbody>
                    </table>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          نوع
                      </div>
                      <div class="col-md-10">
                          {{$team->mode->title}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          نام تیم:
                      </div>
                      <div class="col-md-10">
                          {{$team->team_name}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          مشتری شما: 
                      </div>
                      <div class="col-md-10">
                          {{$team->customer}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          نیاز مشتری:
                      </div>
                      <div class="col-md-10">
                          {{$team->customer_need}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          راه حل شما به نیاز مشتری (ارزشی که برای مشتری خلق می کنید):
                      </div>
                      <div class="col-md-10">
                          {{$team->customer_solution}}
                      </div>
                    </div>
                    
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          رقبای شما:
                      </div>
                      <div class="col-md-10">
                          {{$team->opponent}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          مزیت شما نسبت به رقیب:
                      </div>
                      <div class="col-md-10">
                          {{$team->opponent_advantage}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                         هزینه های کلیدی:
                      </div>
                      <div class="col-md-10">
                          {{$team->cost}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="color:red;">
                         تشریح ایده اولیه کسب و کار (حداقل 240 کاراکتر):
                      </div>
                      <div class="col-md-10" >
                          {{$team->idea}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="">
                         ایده شما در چه مرحله ای از توسعه ی کسب و کار قرار دارد؟
                      </div>
                      <div class="col-md-10" >
                          {{$team->progress}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="">
                        معرف
                      </div>
                      <div class="col-md-10" >
                          {{$team->know}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="">
                        فایل رزومه:
                      </div>
                      <div class="col-md-10" >
                           @if(isset($team->resume))
                              <a href="http://yasidea.ir/cmorgh_user_uploaded/resume/{{$team->resume}}">
                                دانلود فایل رزومه
                              </a>
                          @endif
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="">
                         فایل ضمیمه:
                      </div>
                      <div class="col-md-10" >
                           @if(isset($team->file))
                              <a href="http://yasidea.ir/cmorgh_user_uploaded/{{$team->file}}">
                                دانلود فایل ضمیمه  
                              </a>
                          @endif
                      </div>
                    </div>

                </div>
            </section>
        </section>
@endsection