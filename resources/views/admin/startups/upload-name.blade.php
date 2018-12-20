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
                      استارتاپ های ثبت نامی
                    
                    </h1>
                    <form method="post" action="{{route('filename.store')}}">
                        {{ csrf_field() }}
                       <div class="form-group">
                        <label for="file_name">
                            نام فایل:
                        </label>
                         <input type="text" class="form-control" id="file_name" name="name"    required >
                        </div>
                        <button type="submit" class="btn btn-success" href="">
                            افزودن عنوان فایل آپلودی
                        
                        </button>
                    </form>
                    <div style="margin-bottom:30px;margin-left:30px">
                      @foreach($upload_names as $upload_name)
                          <form method="post" action="{{route('filename.destroy',$upload_name->id)}}" id="delete{{$upload_name->id}}">
                              <input type="hidden" name="_method" value="DELETE" >
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
                                حذف
                            </th>

                          </tr>
                        </thead>
                        <tbody id="uploads">
                            <?php $i=1; ?>
                            @foreach($upload_names as $upload_name)
                              <tr>
                                <td id="counter">
                                    {{$i}}
                                </td>
                                <td>
                                    {{$upload_name->name}}
                                </td>
                                <td>
                                 <button class="btn btn-danger" type="submit" form="delete{{$upload_name->id}}">
                                   <span class="glyphicon glyphicon-remove"></span>
                                 </button> 
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

