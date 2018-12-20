@extends('layouts.main')

@section('title')
	مرکز نوآوری یاس:سیمرغ
@endsection

@section('styles')


@endsection

@section('content')

		@include('includes.30morgh.register.header')
<!--    <div class="blog-single second-about">-->
<!--        <div class="container">-->
            
<!--            <div class="row">-->
<!--        		<div class="col-md-6 col-md-offset-3 col-sm-12">-->
<!--        			<div class="page-title">-->
<!--        				<h2>-->
<!--        		ثبت نام در پیش شتابدهی سیمرغ-->
<!--        				</h2>-->
<!--        			</div>-->
<!--        		</div>-->
<!--    	    </div>-->
<!--    	    <div  class="row" >-->
<!--        		<div class="col-md-8 col-md-offset-2 about-info">-->
<!--        		    <p style="font-size:17px;text-align:center; " >-->
<!--        		        <a href="/photos/poster.jpg">-->
<!--        		            برای دریافت پوستر فراخوان کلیک کنید.-->
<!--        		        </a>-->
<!--        		        <br>-->
<!--                      با توجه به استقبال شما دوستان و پایان ایام‌ امتحانات دانشگاهی، مهلت ارسال طرح نامه ها جهت ارزیابی برای ورود به پیش شتابدهی سیمرغ تا 15 بهمن تمدید شد-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div  class="row"  style="border:2px solid #9C27B0; padding:20px;">-->
<!--                <div class="col-md-10 col-md-offset-1 about-info">-->
<!--                    <form class="upload-form" role="form" data-toggle="validator" id="cmorgh"  method="post" action="{{route('30morgh.add_team')}}" enctype="multipart/form-data">-->
   
<!--                        {{ csrf_field() }}-->
                        
<!--                        <div class="form-group">-->
<!--                          <label for="team_name">-->
<!--                              نام تیم:-->
<!--                            </label>-->
<!--                                        <input type="text" class="form-control" id="team_name" name="team_name" data-error="لطفا این فیلد را  پر نمایید."   placeholder="" required>-->
<!--                            <div class="help-block with-errors"></div>-->
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <label for="name">-->
<!--                             مشخصات اعضا تیم (حداکثر 5 نفر):-->
<!--                            </label>-->
<!--                       <div class="table-responsive">-->
<!--                        <table  class="table" style="margin-bottom:0px;">-->
<!--                            <thead>-->
<!--                              <tr>-->
<!--                                <th>-->
<!--                                    ردیف-->
<!--                                </th>-->
<!--                                <th>-->
<!--                                    نام و نام خانوادگی-->
<!--                                </th>-->
<!--                                <th>-->
<!--                                    شماره موبایل-->
<!--                                </th>-->
<!--                                <th>-->
<!--                                    پست الکترونیکی-->
<!--                                </th>-->
<!--                                <th>-->
<!--                                    شهر محل سکونت-->
<!--                                </th>-->
<!--                                <th>-->
<!--                                   دانشگاه محل تحصیل-->
<!--                                </th>-->
<!--                              </tr>-->
<!--                            </thead>-->
<!--                            <tbody id="members">-->
<!--                              <tr>-->
<!--                                <td id="counter">-->
<!--                                    1-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <div class="form-group">-->
<!--                                        <input type="text" class="form-control" id="name" name="name[]" data-error="لطفا این فیلد را  پر نمایید."   placeholder="نام سرپرست تیم" required>-->
<!--                                        <div class="help-block with-errors"></div>-->
<!--                                    </div>-->
<!--                                <td>-->
<!--                                    <div class="form-group">-->
<!--                                        <input type="text" pattern="^[\u06F0-\u06F90-9]{11}$" class="form-control" id="phone" name="phone[]" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." placeholder="09122342333" required>-->
<!--                                        <div class="help-block with-errors"></div>-->
<!--                                    </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <div class="form-group">-->
                                        
<!--                                        <input type="email" class="form-control" id="email" name="email[]" data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید."  placeholder="test@test.com" required>-->
<!--                                        <div class="help-block with-errors"></div>-->
<!--                                     </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <div class="form-group">-->
                                        
<!--                                        <input type="text" class="form-control" id="city" name="city[]"  required data-error="لطفا این فیلد را پر نمایید."  >-->
<!--                                        <div class="help-block with-errors"></div>-->
<!--                                     </div>-->
<!--                                </td>-->
<!--                                <td>-->
<!--                                    <div class="form-group">-->
                                        
<!--                                        <input type="text" class="form-control" id="university" name="university[]">-->
<!--                                        <div class="help-block with-errors"></div>-->
<!--                                     </div>-->
<!--                                </td>-->
<!--                              </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                        </div>-->
<!--                        <div id="member-buttons" class="text-center">-->
<!--                            <button type="button" style="margin-top:10px;font-weight:bold" class="button  second-button btn-format" id="add-member">-->
<!--                                افزودن هم تیمی-->
<!--                            </button>-->
<!--                            <button type="button" style="margin-top:10px;font-weight:bold; display:none; border-color:red;" class="button btn-danger btn-format btn-format1" id="remove-member">-->
<!--                                حدف هم تیمی-->
<!--                            </button>-->
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="customer">-->
<!--                              مشتری شما: -->
<!--                            </label>-->
<!--                          <textarea class="form-control" rows="2" id="customer" name="customer"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>-->
<!--                            <div class="help-block with-errors"></div>-->
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="customer_need">-->
<!--                             نیاز مشتری:-->
<!--                            </label>-->
<!--                          <textarea class="form-control" rows="2" id="customer_need" name="customer_need"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>-->
<!--                           <div class="help-block with-errors"></div>-->
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="customer_solution">-->
<!--                             راه حل شما به نیاز مشتری (ارزشی که برای مشتری خلق می کنید):-->
<!--                            </label>-->
<!--                          <textarea  class="form-control" rows="2" id="customer_solution" name="customer_solution"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>-->
<!--                            <div class="help-block with-errors"></div>-->
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="opponent">-->
<!--                             رقبای شما:-->
<!--                            </label>-->
<!--                          <textarea class="form-control" rows="2" id="opponent" name="opponent"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>-->
<!--                            <div class="help-block with-errors"></div>-->
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="opponent_advantage">-->
<!--                             مزیت شما نسبت به رقیب:-->
<!--                            </label>-->
<!--                          <textarea class="form-control" rows="2" id="opponent_advantage" name="opponent_advantage"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>-->
<!--                            <div class="help-block with-errors"></div>                            -->
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="cost">-->
<!--                             هزینه های کلیدی:-->
<!--                            </label>-->
<!--                          <textarea class="form-control" rows="2" id="cost" name="cost"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>-->
<!--                            <div class="help-block with-errors"></div>-->
<!--                        </div><hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="idea">-->
<!--                         تشریح ایده اولیه کسب و کار (حداقل 240 کاراکتر):-->
<!--                            </label>-->
<!--                          <textarea minlength="240" class="form-control" rows="5" id="idea" name="idea"  data-error="لطفا این فیلد را مطابق فرمت خواسته شده پر نمایید." required></textarea>-->
<!--                            <div class="help-block with-errors"></div>-->
<!--                        </div><hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="progress">-->
<!--                             ایده شما در چه مرحله ای از توسعه ی کسب و کار قرار دارد؟-->
<!--                            </label>-->
<!--                          <textarea class="form-control" rows="2" id="progress" name="progress"  ></textarea>-->
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="resume">-->
<!--ارسال رزومه اعضا تیم:-->
<!--                            (حداکثر 5 مگابایت)-->
<!--                            </label>-->
<!--                          <input type="file" class="resume-file" data-max-size="5000000"  id="resume" name="resume" required data-error="لطفا فایل رزومه افراد تیم را آپلود نمایید.">-->
<!--                          <div class="help-block with-errors"></div>-->
                          
<!--                        </div>-->
<!--                        <hr>-->
<!--                        <div class="form-group">-->
<!--                          <label for="file">-->
<!--در صورتیکه پیشتر برروی این ایده کارکرده اید و مستنداتی دارید، مستندات خود را ارسال کنید.-->
<!--                            (حداکثر 5 مگابایت)-->
<!--                            </label>-->
<!--                          <input type="file" class="upload-file" data-max-size="5000000"  id="file" name="file">-->
                          
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                          <label for="know">-->
<!--                             نحوه آشنایی شما با شتابدهنده سیمرغ:-->
<!--                            </label>-->
<!--                          <textarea class="form-control" rows="2" id="know" name="know"  data-error="لطفا این فیلد را  پر نمایید."  required></textarea>-->
<!--                            <div class="help-block with-errors"></div>-->
<!--                        </div>-->
<!--                        <div id="" class="text-center">-->
<!--                            <button style="width:50%;font-weight:bold;" type="submit" style="margin-top:10px;font-weight:bold" class="button btn-primary   btn-format" id="">-->
<!--                               ثبت نام-->
<!--                            </button>-->
<!--                        </div>-->

<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
    
            
<!--        </div>-->
        
<!--    </div>-->
<div class="blog-single second-about" style="height:1000px;">
        <div class="container">
            
            <div class="row" style="padding-top:10%">
        		<div class="col-md-6 col-md-offset-3 col-sm-12">
        			<div class="page-title">
        				<h2>
       مهلت ثبت نام در دوره دوم شتابدهی سیمرغ پایان یافت. فراخوان ثبت نام دوره سوم پیش شتابدهی به زودی درسایت قرار خواهد گرفت.
        				</h2>
        			</div>
        		</div>
    	    </div>
    	    <div  class="row" >
        		<div class="col-md-8 col-md-offset-2 about-info">
        		    <p style="font-size:17px;text-align:center; " >
                        <a href="/index.php">
                            برای رفتن به صفحه اصلی کلیک کنید.
                        </a>
                    </p>
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

