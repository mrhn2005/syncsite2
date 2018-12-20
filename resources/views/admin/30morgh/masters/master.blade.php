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
                         نام:
                      {{$master->first_name}} {{$master->last_name}}
                    
                    </h1>
                    
                    
                    <div class="row">
                      <div class="col-md-2">
                          نام 
                      </div>
                      <div class="col-md-10">
                          {{$master->first_name}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          نام خانوادگی:
                      </div>
                      <div class="col-md-10">
                          {{$master->last_name}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                           کد ملی:
                      </div>
                      <div class="col-md-10">
                          {{$master->national_number}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                        مدرک تحصیلی:
                        </div>
                      <div class="col-md-10">
                          {{$master->degree}}
                      </div>
                    </div>
                    
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                           شماره همراه:
                      </div>
                      <div class="col-md-10">
                          {{$master->mobile}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                         پست الکترونیکی:
                      </div>
                      <div class="col-md-10">
                          {{$master->email}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2">
                          حوزه فعالیت:
                      </div>
                      <div class="col-md-10">
                          {{$master->field}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="color:red;">
                         سابقه کار:
                      </div>
                      <div class="col-md-10" >
                          {{$master->experience}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="">
                         طریقه آشنایی با یاس:
                      </div>
                      <div class="col-md-10" >
                          {{$master->know}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="">
                        علت تمایل به همکاری با شرکت یاس
                      </div>
                      <div class="col-md-10" >
                          {{$master->reason}}
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-2" style="">
                        فایل رزومه:
                      </div>
                      <div class="col-md-10" >
                           @if(isset($master->resume))
                              <a href="http://yasidea.ir/cmorgh_user_uploaded/resume/{{$master->resume}}">
                                دانلود فایل رزومه
                              </a>
                          @endif
                      </div>
                    </div>

                </div>
            </section>
        </section>
@endsection