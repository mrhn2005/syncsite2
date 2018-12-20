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
                       همه تیم‌ها
                    
                    </h1>
  
                    <table class="table table-hover" style="font-size:120%">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                               <th>
                                   نام تیم
                                 </th>
                               <th>
                                   نام سرپرست
                                </th>
                               <th>
                                  تعداد اعضا تیم
                                </th>
                                <th>
                                    نوع
                                </th>
                               
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                            
                                <tr class='clickable-row' data-href="{{route('cmorgh.show',$team->id)}}">
                                   <td>{{$team->id}}</td>
                                   <td>{{$team->team_name}}</td>
                                   
                                   <td>{{$team->members->first()->name}}</td>
                                   <td>{{$team->members->count()}}</td>
                                   <td>{{empty($team->mode)?'':$team->mode->title}}</td>
                                </tr>
                            
                            @endforeach
                      </tbody>
                    </table>   
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