@extends('admin.layout.auth')

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
                        @foreach($team->tasks as $task)
                            <form method="post" action="{{route('admin.teams.task.opinion',$task)}}" id="form{{$task->id}}">
                                {{ csrf_field() }}
                            </form>
                        @endforeach
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
                              نظر مدیر شتابدهنده
                            </th>
                            <th>
                              ثبت
                            </th>
                            <th>
                              وضعیت
                            </th>
                            <th>
                               تایید یا رد
                            </th>
                          </tr>
                        </thead>
                        <tbody id="tasks">
                            <?php $i=1; ?>
                            @foreach($team->tasks as $task)
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
                                <td>
                                    <div class="form-group">
                                      <textarea name="opinion" class="form-control" form="form{{$task->id}}">{{$task->opinion}}</textarea>
                                    </div>
                                </td>
                                <td>
                                    <input type="submit" name="publish" form="form{{$task->id}}" class="btn btn-primary" value="
                                       ثبت نظر
                                        ">
                                </td>
                                <td>
                                    @if($task->status==2)
                                    <span style="color:blue">
                                        در حال بررسی
                                    </span>
                                    @elseif($task->status==1)
                                    <span style="color:green">
                                         مورد تایید
                                    </span>
                                    @else
                                    <span style="color:red">
                                        رد
                                    </span>
                                    @endif
                                </td>
                                <td>
                                    @if($task->status==2)
                                    
                                        <a href="{{route('admin.tasks.approve',$task)}}" class="btn btn-success">
                                            تایید
                                        </a>
                                        <a href="{{route('admin.tasks.disapprove',$task)}}" class="btn btn-danger">
                                           رد
                                        </a>
                                    
                                    @elseif($task->status==1)
                                        <a href="{{route('admin.tasks.disapprove',$task)}}" class="btn btn-danger">
                                           رد
                                        </a>
                                    @else
                                        <a href="{{route('admin.tasks.approve',$task)}}" class="btn btn-success">
                                            تایید
                                        </a>
                                    @endif
                                </td>
                              </tr>
                              <?php $i=$i+1; ?>
                          @endforeach
                        </tbody>
                    </table>
                    </div>
                    <br>
                    <hr>
                    <a class="btn btn-success" href="{{route('admin.tasks.create',$team->id)}}">
                        افزودن فعالیت جدید
                    </a>
                </div>
                <hr>
                {!! $gantt !!}
                <br>
                <br>
            </section>
        </section>
@endsection
