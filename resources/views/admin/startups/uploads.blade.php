@extends('admin.layout.auth')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" type="text/css" />
<style>
    body{
                
        direction:rtl !important;
        text-align:right !important;
    }

</style>
@endsection

@section('content')
        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    @include('includes.messages')
                    <h1 class="page-header">
                       فایل های آپلودی تیم
                       {{$team->name}}
                    </h1>
                    
                        @foreach($team->uploads as $upload)
                        <form method="post" action="{{route('admin.teams.upload.opinion',$upload)}}" id="form{{$upload->id}}">
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
                                عنوان فایل
                            </th>
                            <th>
                                تاریخ آپلود
                            </th>
                            <th>
                                دانلود فایل
                            </th>
                            <th>
                               نظر مدیر شتابدهنده
                            </th>
                            <th>
                                ثبت
                            </th>
                          </tr>
                        </thead>
                        <tbody id="uploads">
                            <?php $i=1; ?>
                            @foreach($team->uploads as $upload)
                              <tr>
                                <td id="counter">
                                    {{$i}}
                                </td>
                                <td>
                                    {{$upload->upload_name?$upload->upload_name->name:''}}
                                <td>
                                    {{jDate::forge($upload->created_at->diffForHumans())->ago()}}
                                    
                                </td>
                                <td>
                                    <a href="{{url('storage/app/'.$upload->path)}}">
                                        <icon class="fa fa-download"></icon>
                                    </a>
                                    
                                </td>
                                <td>
                                    <div class="form-group">
                                      <textarea name="opinion" class="form-control" form="form{{$upload->id}}">{{$upload->opinion}}</textarea>
                                    </div>
                                </td>
                                <td>
                                    <input type="submit" name="publish" form="form{{$upload->id}}" class="btn btn-primary btn-lg" value="
                                       ثبت نظر
                                        ">
                                </td>
                              </tr>
                              <?php $i=$i+1; ?>
                          @endforeach
                        </tbody>
                    </table>
                        


                </div>
            </section>
        </section>
@endsection
