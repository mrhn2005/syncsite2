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
                      استارتاپ‌ها
                    
                    </h1>

                </div>
                <div  class="row">
                <div class="col-md-10 col-md-offset-1 about-info">
                    <form class="upload-form" role="form" data-toggle="validator"  method="post" action="{{route('startup.store')}}" enctype="multipart/form-data">
   
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                          <label for="name">
                              نام استارتاپ:
                            </label>
                            <input type="text" class="form-control" id="name" name="name" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                         <div class="form-group">
                          <label for="link">
                             لینک استارتاپ
                            </label>
                            <input type="text" class="form-control" id="link" name="link"  placeholder="" >
                            <div class="help-block with-errors"></div>
                        </div>   
                        <hr>
                        <div class="form-group">
                          <label for="description">
                           توضیحات
                            </label>
                          <input type="text" class="form-control"   id="description" name="description">
                          <div class="help-block with-errors"></div>
                          
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="logo">
                            لگوی استارتاپ
                            </label>
                          <input type="file" class="resume-file" data-max-size="5000000"  id="logoe" name="logo" required >
                          <div class="help-block with-errors"></div>
                          
                        </div>
                        <hr>
                        
                        
                        <div class="form-group">
                          <label for="photo_desc">
                            عکس توضیحات استارتاپ
                            </label>
                          <input type="file" class="resume-file" data-max-size="5000000"  id="photo_desc" name="photo_desc">
                          <div class="help-block with-errors"></div>
                          
                        </div>
                        
                        <div id="" class="text-center">
                            <button style="width:50%;font-weight:bold;" type="submit" style="margin-top:10px;font-weight:bold" class="button btn btn-primary " id="">
                               ثبت استارتاپ
                            </button>
                        </div>

                    </form>
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
</script>
@endsection