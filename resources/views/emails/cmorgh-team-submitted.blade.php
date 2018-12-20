<html lang="fa" class="no-js">
	<head>
		<!-- Document Settings -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
		 ثبت تیم در سیمرغ
		
		</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" type="text/css" />
        <link rel="stylesheet" href="http://cdn.font-store.ir/shahab.css" type="text/css" />
        <style>
            body{
                font-family:Shahab !important;
                direction:rtl;
                text-align:right;
            }
            .col-md-2{
                font-weight:bold;
            }
            th{
                text-align:right !important;
            }
        </style>
	</head>
	<body>
	  <h3 >
	    تیم جدید با این مشخصات ثبت شد:
    </h3>
        <label for="name">
             مشخصات اعضا تیم :
            </label>
         <div class="table-responsive">
        <table  class="table" style="margin-bottom:0px; font-family:Shahab !important">
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
                    شهر
                </th>
                <th>
                    دانشگاه
                </th>
              </tr>
            </thead>
            <tbody id="members">
                <?php $i=1; ?>
                @foreach($team->members as $member)
                  <tr>
                    <td id="counter">
                        {{$i}}
                    </td>
                    <td>
                        {{$member->name}}
                    <td>
                        {{$member->phone}}
                    </td>
                    <td>
                        {{$member->email}}
                    </td>
                    <td>
                        {{$member->city}}
                    </td>
                    <td>
                        {{$member->university}}
                    </td>
                  </tr>
                  <?php $i=$i+1; ?>
              @endforeach
            </tbody>
        </table>
        </div>
        <br>
        <hr>
        <div class="row">
          <div class="col-md-2">
              نام تیم:
          </div>
          <div class="col-md-10">
              {{$team->team_name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
              مشتری شما: 
          </div>
          <div class="col-md-10">
              {{$team->customer}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
              نیاز مشتری:
          </div>
          <div class="col-md-10">
              {{$team->customer_need}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
              راه حل شما به نیاز مشتری (ارزشی که برای مشتری خلق می کنید):
          </div>
          <div class="col-md-10">
              {{$team->customer_solution}}
          </div>
        </div>
        
        <hr>
        <div class="row">
          <div class="col-md-2">
              رقبای شما:
          </div>
          <div class="col-md-10">
              {{$team->opponent}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
              مزیت شما نسبت به رقیب:
          </div>
          <div class="col-md-10">
              {{$team->opponent_advantage}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
             هزینه های کلیدی:
          </div>
          <div class="col-md-10">
              {{$team->cost}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2" style="color:red;">
             تشریح ایده اولیه کسب و کار (حداقل 240 کاراکتر):
          </div>
          <div class="col-md-10" >
              {{$team->idea}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2" style="">
             ایده شما در چه مرحله ای از توسعه ی کسب و کار قرار دارد؟
          </div>
          <div class="col-md-10" >
              {{$team->progress}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2" style="">
            معرف
          </div>
          <div class="col-md-10" >
              {{$team->know}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2" style="">
            فایل رزومه:
          </div>
          <div class="col-md-10" >
               @if(isset($team->resume))
                  <a href="http://yasidea.ir/cmorgh_user_uploaded/resume/{{$team->resume}}">
                    دانلود فایل رزومه
                  </a>
              @endif
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2" style="">
             فایل ضمیمه:
          </div>
          <div class="col-md-10" >
               @if(isset($team->file))
                  <a href="http://yasidea.ir/cmorgh_user_uploaded/{{$team->file}}">
                    دانلود فایل ضمیمه  
                  </a>
              @endif
          </div>
        </div>

	</body>
	
</html>