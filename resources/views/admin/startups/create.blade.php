@extends('admin.layout.auth')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" type="text/css" />
<link href="/admin/css/bootstrap-datepicker.min.css" rel="stylesheet">
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
                    
                     <h1 class="page-header">
                       افزودن فعالیت جدید
                    </h1>

                    <form method="post" action="{{route('admin.tasks.store')}}">
                        {{ csrf_field() }}
                        @include('team.tasks.form')
                            <input type="hidden" name="team_id" value="{{$team->id}}">
                            <input type="hidden" name="status" value="1">
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
<script
  src="http://code.jquery.com/ui/1.9.2/jquery-ui.min.js"
  integrity="sha256-eEa1kEtgK9ZL6h60VXwDsJ2rxYCwfxi40VZ9E0XwoEA="
  crossorigin="anonymous"></script>
  <script src="/admin/js/bootstrap-datepicker.min.js"></script>
    <script src="/admin/js/bootstrap-datepicker.fa.min.js"></script>
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