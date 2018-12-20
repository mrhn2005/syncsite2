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
                      افزودن کارگاه یا رویداد
                    
                    </h1>

                </div>
                <div  class="row">
                <div class="col-md-10 col-md-offset-1 about-info">
                    <form class="upload-form"  method="post" action="{{route('workshop.update',$workshop->id)}}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT"  >
                        @include('admin.includes.workshop-form')
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