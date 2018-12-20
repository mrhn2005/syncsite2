@extends('team.layout.auth')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" type="text/css" />
<link href="/vendor/swatkins/gantt/css/gantt.css" rel="stylesheet" type="text/css">
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
                    @include('includes.messages')
                     <h1 class="page-header">
                      تیم: 
                      {{$team->name}}
                    
                    </h1>

                    <label for="name">
                         فعالیت ها:
                        </label>
                   <div class="table-responsive">
                    <table  class="table" style="margin-bottom:0px; font-size:105%">
                        <thead>
                          <tr>
                            <th>
                                ردیف
                            </th>
                            <th>
                                عنوان فعالیت
                            </th>
                            <th>
                                تاریخ شروع
                            </th>
                            <th>
                                تاریخ اتمام
                            </th>
                            <th>
                               ویرایش
                            </th>
                            <th>
                               نظر مدیر شتابدهنده
                            </th>
                          </tr>
                        </thead>
                        <tbody id="tasks">
                            <?php $i=1; ?>
                            @foreach($team->tasks as $task)
                            @if($task->status==1|| $task->updated_at > \Carbon\Carbon::today()->subDays(7) )
                              <tr>
                                <td id="counter">
                                    {{$i}}
                                </td>
                                <td>
                                    {{$task->name}}
                                <td>
                                    {{$task->begin_date}}
                                </td>
                                <td>
                                    {{$task->end_date}}
                                </td>
                                @if($task->status==2)
                                <td>
                                    <a href="{{route('tasks.edit',$task)}}">
                                        <i class="fa fa-edit" style="font-size:150%;color:green"></i>
                                    </a>
                                </td>
                                @else
                                <td>
                                    <i class="fa fa-ban" style="font-size:150%;color:red"></i> 
                                </td>
                                 
                                @endif
                                
                                <td>
                                    @if($task->status==2)
                                    <span style="color:blue">
                                        در حال بررسی
                                    </span>
                                    @elseif($task->status==1)
                                    <span style="color:green">
                                         مورد تایید
                                         -{{$task->opinion}}
                                    </span>
                                    @else
                                    <span style="color:red">
                                        رد
                                        -{{$task->opinion}}
                                    </span>
                                    @endif
                                </td>
                              </tr>
                              <?php $i=$i+1; ?>
                            @endif
                          @endforeach
                        </tbody>
                    </table>
                    </div>
                    <br>
                    <hr>
                    <a class="btn btn-success" href="{{route('tasks.create')}}">
                        افزودن فعالیت جدید
                    </a>
                    <hr>
                {!! $gantt !!}
                <br>
                <br>

                </div>
            </section>
        </section>
@endsection
