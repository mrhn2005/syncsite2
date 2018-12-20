@extends('admin.layout.auth')

@section('style')
<style>
    tr{
        cursor:pointer!important;
    }
    #tags_tagsinput{
        width:100% !important;
    }
     #tags_tagsinput span{
        font-size: 110%;
        font-family: Calibri;
     }
     div.tagsinput span.tag a {
         font-size: 140% !important;
         color:white !important;
     }
     div.tagsinput span.tag a:hover{
         color:red!important;
     }

</style>
<link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" type="text/css" />    
@endsection

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row" style="margin-right:10px;margin-left:20px;">
                 <h1 class="page-header">
                 ایجاد پست جدید
                
                </h1>
                <form class="upload-form" role="form" data-toggle="validator" id="cmorgh"  method="post" action="{{route('blog.update',$post->id)}}" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    @include('admin.includes.post-form')
                </form>    
            </div>
        </section>
    </section>
@endsection

@section('js')
@include('admin.tinyeditor')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.7/validator.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js" ></script>
    
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" />
    <script>
        $('#tags').attr("value", "{{$post->tagNames}}");
        $('#tags').tagsInput({
            autocomplete_url: "{{route('tags.autosearch')}}" 
            });
        
    </script>

@endsection