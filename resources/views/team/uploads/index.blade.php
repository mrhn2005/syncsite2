@extends('team.layout.auth')

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
                       فایل های آپلودی
                    </h1>
                    
                    
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
                          </tr>
                        </thead>
                        <tbody id="uploads">
                            <?php $i=1; ?>
                            @foreach($uploads as $upload)
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
                                    @if($upload->opinion)
                                    {{$upload->opinion}}
                                    @else
                                     در دست بررسی
                                    @endif
                                </td>
                              </tr>
                              <?php $i=$i+1; ?>
                          @endforeach
                        </tbody>
                    </table>
                        
                    
                    
                    <h2 class="page-header">
                       افزودن فایل
                    </h2>

                    <form method="post" class="upload-form" data-toggle="validator" action="{{route('uploads.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="container">
                            <div class="input-group">
                                <span class="input-group-addon" style="border-radius: 0px; border: solid 1px #CCCCCC;">
                                    انتخاب عنوان فایل
                                </span>
                                <select id="upload_name" name="upload_name"  class="form-control" enctype="multipart/form-data">
                                     
                                      
                                    @foreach($upload_names as $upload_name)
                                        <option value="{{$upload_name->id}}">
                                          {{$upload_name->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <hr>
                            <div class="form-group" style="font-size:130%">
                                <label for="upload">
                                    انتخاب فایل (حداکثر 2 مگابایت)
                                </label>
                                
                                <input type="file" name="upload" id="upload" class="upload-file" data-max-size="2080000" required>
                              
                            </div>
                            <div class="text-center">
                                <button type="submit"  class="btn btn-primary btn-lg">
                                    آپلود فایل
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>
        </section>
@endsection


@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.7/validator.min.js"></script>
<script>
$(function(){
    var fileInput = $('.upload-file');
    var maxSize = fileInput.data('max-size');
    $('.upload-form').submit(function(e){
        if(fileInput.get(0).files.length){
            var fileSize = fileInput.get(0).files[0].size; // in bytes
            if(fileSize>maxSize){
                alert('حجم فایل ارسالی بیشتر از مقدار مجاز است' );
                return false;
            }else{
                
            }
        }else{
            
        }

    });
});
</script>
@endsection