@extends('team.layout.auth')

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
    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
     background: #F0F2F7 !important; 
    color: #333;
    border-radius: 3px;
}
.ui-datepicker-today .ui-state-default {
    background: red!important;
    color:white!important;
}
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
    background: #08c!important;
    color: #fff!important;
}
</style>
@endsection

@section('content')
        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    @include('includes.messages')
                    <h1 class="page-header">
                       ویرایش فعالیت
                    </h1>

                    <form method="post" action="{{route('tasks.update',$task)}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT"  >
                        @include('team.tasks.form')
                            <input type="hidden" name="team_id" value="{{Auth::guard('team')->user()->id}}">
                            <div class="text-center">
                                <button type="submit"  class="btn btn-primary btn-lg">
                                    تایید
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>
        </section>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $(".datetimepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
         $("#datepickerbtn1").click(function(event) {
            event.preventDefault();
            $("#begin_date").focus();
        })
        $("#datepickerbtn").click(function(event) {
            event.preventDefault();
            $("#end_date").focus();
        })
    });
</script>

@endsection