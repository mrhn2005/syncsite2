@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس:سیمرغ
@endsection

@section('styles')
<!--<link href="/admin/css/bootstrap-datepicker.min.css" rel="stylesheet">-->
<link rel="stylesheet" href="/css/persian-datepicker.min.css"/>

@endsection

@section('content')

		@include('includes.30morgh.register.header')
		<?php $mode=$mmode->id; ?>
    <div class="blog-single second-about">
        <div class="container">
            
            <div class="row">
        		<div class="col-md-6 col-md-offset-3 col-sm-12">
        			<div class="page-title">
        				<h2>
        		ثبت نام در پیش شتابدهی سیمرغ
        				</h2>
        			</div>
        		</div>
    	    </div>
    	    <div  class="row" >
        		<div class="col-md-8 col-md-offset-2 about-info">
        		    <p style="font-size:17px;text-align:center; " >
        		        <a href="/photos/poster.jpg">
        		            برای دریافت پوستر فراخوان کلیک کنید.
        		        </a>
        		        
                    </p>
                </div>
            </div>
            <div  class="row"  style="border:2px solid #9C27B0; padding:20px;">
                <div class="col-md-10 col-md-offset-1 about-info">
                    <div class="text-center">
                        <h3 style="font-size:180%;font-weight:bold;margin-bottom:40px;">
                           {{$mmode->title}} 
                        </h3>
                        
                    </div>
                    <form class="upload-form" role="form" data-toggle="validator" id="cmorgh"  method="post" action="{{route('30morgh.add_team')}}" enctype="multipart/form-data">
   
                        {{ csrf_field() }}
                        @if($mode!=3 && $mode!=4)
                        <div class="form-group">
                          <label for="team_name">
                              نام تیم:
                            </label>
                                        <input type="text" class="form-control" id="team_name" name="team_name" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        @endif
                        <label for="name">
                            @if($mode==3 && $mode==4)
                                مشخصات:
                            @else
                             مشخصات اعضا تیم (حداکثر 5 نفر):
                            @endif
                            </label>
                       <div class="table-responsive">
                        <table  class="table" style="margin-bottom:0px;">
                            <thead>
                              <tr>
                                <th>
                                    ردیف
                                </th>
                                <th>
                                    نام و نام خانوادگی
                                </th>
                                <th>
                                    شماره موبایل
                                </th>
                                <th>
                                    پست الکترونیکی
                                </th>
                                <th>
                                    شهر محل سکونت
                                </th>
                                <th>
                                   دانشگاه محل تحصیل
                                </th>
                                <th>
                                   تاریخ تولد
                                </th>
                              </tr>
                            </thead>
                            <tbody id="members">
                              <tr>
                                <td id="counter">
                                    1
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name[]" data-error="لطفا این فیلد را  پر نمایید."   placeholder="نام سرپرست تیم" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                <td>
                                    <div class="form-group">
                                        <input type="text" pattern="^[\u06F0-\u06F90-9]{11}$" class="form-control" id="phone" name="phone[]" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." placeholder="09122342333" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        
                                        <input type="email" class="form-control" id="email" name="email[]" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید."  placeholder="test@test.com" required>
                                        <div class="help-block with-errors"></div>
                                     </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        
                                        <input type="text" class="form-control" id="city" name="city[]"  required data-error="لطفا این فیلد را پر نمایید."  >
                                        <div class="help-block with-errors"></div>
                                     </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        
                                        <input type="text" class="form-control" id="university" name="university[]">
                                        <div class="help-block with-errors"></div>
                                     </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class='input-group date' >
                                            <input type='text' class="datetimepicker form-control" name="birthday[]" id="birthday"  required autocomplete="off" data-error="لطفا این فیلد را پر نمایید."  >
                                            
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                        </div>
                        @if($mode!=3 && $mode!=4)
                        <div id="member-buttons" class="text-center">
                            <button type="button" style="margin-top:10px;font-weight:bold" class="button  second-button btn-format" id="add-member">
                                افزودن هم تیمی
                            </button>
                            <button type="button" style="margin-top:10px;font-weight:bold; display:none; border-color:red;" class="button btn-danger btn-format btn-format1" id="remove-member">
                                حدف هم تیمی
                            </button>
                        </div>
                        @endif
                        <hr>
                        @if($mode==1 || $mode==3)
                        <div class="form-group">
                          <label for="customer">
                              مشتری شما: 
                            </label>
                          <textarea class="form-control" rows="2" id="customer" name="customer"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="customer_need">
                             نیاز مشتری:
                            </label>
                          <textarea class="form-control" rows="2" id="customer_need" name="customer_need"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                           <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        
                        <div class="form-group">
                          <label for="customer_solution">
                             راه حل شما به نیاز مشتری (ارزشی که برای مشتری خلق می کنید):
                            </label>
                          <textarea  class="form-control" rows="2" id="customer_solution" name="customer_solution"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="opponent">
                             رقبای شما:
                            </label>
                          <textarea class="form-control" rows="2" id="opponent" name="opponent"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <hr>
                        
                        <div class="form-group">
                          <label for="opponent_advantage">
                             مزیت شما نسبت به رقیب:
                            </label>
                          <textarea class="form-control" rows="2" id="opponent_advantage" name="opponent_advantage"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                            <div class="help-block with-errors"></div>                            
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="cost">
                             هزینه های کلیدی:
                            </label>
                          <textarea class="form-control" rows="2" id="cost" name="cost"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                            <div class="help-block with-errors"></div>
                        </div><hr>
                        <div class="form-group">
                          <label for="idea">
                         تشریح ایده اولیه کسب و کار (حداقل 240 کاراکتر):
                            </label>
                          <textarea minlength="240" class="form-control" rows="5" id="idea" name="idea"  data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." required></textarea>
                            <div class="help-block with-errors"></div>
                        </div><hr>
                        <div class="form-group">
                          <label for="progress">
                             ایده شما در چه مرحله ای از توسعه ی کسب و کار قرار دارد؟
                            </label>
                          <textarea class="form-control" rows="2" id="progress" name="progress"  ></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="file">
در صورتیکه پیشتر برروی این ایده کارکرده اید و مستنداتی دارید، مستندات خود را ارسال کنید.
                            (حداکثر 5 مگابایت)
                            </label>
                          <input type="file" class="upload-file" data-max-size="5000000"  id="file" name="file">
                          
                        </div>
                        @endif
                        <div class="form-group">
                          <label for="resume">
                              @if($mode==3 || $mode==4)
                              
                              ارسال رزومه:
                              @else
ارسال رزومه اعضا تیم:
                            @endif
                            (حداکثر 5 مگابایت)
                            </label>
                          <input type="file" class="resume-file" data-max-size="5000000"  id="resume" name="resume" required data-error="لطفا فایل رزومه افراد تیم را آپلود نمایید.">
                          <div class="help-block with-errors"></div>
                          
                        </div>
                        <hr>
                        @if($mode==4)
                        <div class="form-group">
                          <label for="progress">
                            حوزه علاقه مندی شما جهت همکاری با یاس چیست؟
                            </label>
                          <textarea class="form-control" rows="2" id="progress" name="progress"  ></textarea>
                        </div>
                        <hr>
                        @endif
                        <div class="form-group">
                          <label for="know">
                             نحوه آشنایی شما با شتابدهنده سیمرغ:
                            </label>
                          <textarea class="form-control" rows="2" id="know" name="know"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <input type="hidden" value="{{$mode}}" name="mode_id">
                        <div  class="text-center">
                            <button style="width:50%;font-weight:bold;" type="submit"  class="button btn-primary   btn-format">
                               ثبت نام
                            </button>
                        </div>

                    </form>
                </div>
            </div>
    
            
        </div>
        
    </div>

@endsection
@section('footer')
			<footer>
			<div class="container">
				<div class="col-md-8 col-md-offset-2 left-side col-xs-12">
					<span>
						© 
						تمامی حقوق این وبسایت متعلق به مرکز نوآوری یاس می باشد
						</span>
				</div>
				<div class="col-md-2 right-side col-xs-12">
					<span id="to-top">
					<i class="fa fa-arrow-up"></i>
					</span>
				</div>
			</div>
		</footer>

@endsection
@section('js')

<script>
var counter=1;
$(document).ready(function() {


    $("#add-member").click(function() {
        console.log(counter);
        if (counter==1){
            //  $("#member-buttons").append('<button style="margin-top:10px;font-weight:bold" class="button btn-danger btn-format" id="remove-member">'+
            //                 'حدف هم تیمی'+
            //             '</button>').hide().show('slow');
            $("#remove-member").show(400);
        };
        counter=counter+1;
        
            $("#members").append('<tr id="added-member'+counter+'">'+
                                    '<td id="counter">'+counter+'</td>'+
                                    '<td>'+
                                        '<div class="form-group">'+
                                            '<input type="text" class="form-control"  name="name[]" placeholder="نام هم تیمی">'+
                                        '</div>'+
                                    '<td>'+
                                        '<div class="form-group">'+
                                             '<input type="text" pattern="^[\u06F0-\u06F90-9]{11}$" class="form-control"  name="phone[]" placeholder="09122342333" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید.">'+
                                             '<div class="help-block with-errors"></div>'+
                                        '</div>'+
                                    '</td>'+
                                    '<td>'+
                                        '<div class="form-group">'+
                                            '<input type="email" class="form-control" name="email[]" placeholder="test@test.com" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید.">'+
                                            '<div class="help-block with-errors"></div>'+
                                         '</div>'+
                                    '</td>'+
                                    '<td>'+
                                        '<div class="form-group">'+
                                        '<input type="text" class="form-control" id="city" name="city[]">'+
                                         '<div class="help-block with-errors"></div>'+
                                     '</div>'+
                                    '</td>'+
                                    '<td>'+
                                        '<div class="form-group">'+
                                            '<input type="text" class="form-control" id="university" name="university[]">'+
                                            '<div class="help-block with-errors"></div>'+
                                         '</div>'+
                                    '</td>'+
                                    '<td>'+
                                        '<div class="form-group">'+
                                            '<div class="input-group date">'+
                                                '<input type="text" class="datetimepicker form-control" name="birthday[]" id="birthday"  required  data-error="لطفا این فیلد را پر نمایید."  >'+
                                                '<div class="help-block with-errors"></div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</td>'+
                                  '</tr>').validator('update');
         
         if(counter==5){
            $("#add-member").hide(400); 
         }
         if(counter<5){
            $("#add-member").show(400); 
         }
        $(".datetimepicker").pDatepicker({
        initialValue: false,
        format: 'YYYY/MM/DD',
        checkYear: function(year){
        return year <= 1397;
         }
    });
    });
    $("#remove-member").click(function() {
        console.log(counter);
        $('#added-member'+counter).remove();
        counter=counter-1;
        if (counter==1){
            //  $("#member-buttons").append('<button style="margin-top:10px;font-weight:bold" class="button btn-danger btn-format" id="remove-member">'+
            //                 'حدف هم تیمی'+
            //             '</button>').hide().show('slow');
            $("#remove-member").hide(400);
        };
        if(counter<5){
            $("#add-member").show(400); 
         }
    });
    
});


</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.7/validator.min.js"></script>

<script>
@if($mode==1 || $mode==3)
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
@endif
$(function(){
    var fileInput = $('.resume-file');
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
            // alert('لطفا ابتدا فایل رزومه افراد تیم را آپلود نمایید.' );
            //     return false;
        }

    });
});
    </script>
<script
  src="http://code.jquery.com/ui/1.9.2/jquery-ui.min.js"
  integrity="sha256-eEa1kEtgK9ZL6h60VXwDsJ2rxYCwfxi40VZ9E0XwoEA="
  crossorigin="anonymous"></script>
<script src="/js/persian-date.min.js"></script>
  <script src="/js/persian-datepicker.min.js"></script>
  <script>
      $(document).ready(function() {
    $(".datetimepicker").pDatepicker({
        initialValue: false,
        format: 'YYYY/MM/DD',
        checkYear: function(year){
        return year <= 1397;
         }
    });
  });
  </script>
@endsection

