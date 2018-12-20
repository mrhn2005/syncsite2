<html lang="fa" class="no-js">
	<head>
		<!-- Document Settings -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
		 ثبت نام در رویداد
		
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
	<body style="direction:rtl;text-align:right;">
	  <h4 style="direction:rtl;text-align:right;">
	      
	   ثبت نام در رویداد
	   {{$participant->event->name}}
	       </h4>
       
        <hr>
        <div>
            <div class="row">
              <div class="col-md-2">
                 نام:
              </div>
              <div class="col-md-10">
                  {{$participant->first_name}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                 نام خانوادگی
              </div>
              <div class="col-md-10">
                  {{$participant->last_name}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                 شماره موبایل:
              </div>
              <div class="col-md-10">
                  {{$participant->phone}}
              </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                 ایمیل:
                </div>
                <div class="col-md-10">
                 {{$participant->email}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                  نام رویداد:
                </div>
                <div class="col-md-10">
                 {{$participant->event->name}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                  وضعیت پرداخت:
                </div>
                <div class="col-md-10">
                 {{count($participant->transaction)?$participant->transaction->status:''}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                 طریقه آشنایی:
                </div>
                <div class="col-md-10">
                 {{$participant->know}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                 رشته تحصیلی:
                </div>
                <div class="col-md-10">
                 {{$participant->field}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                 محل سکونت:
                </div>
                <div class="col-md-10">
                 {{$participant->city}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    میزان تحصیلات:
                </div>
                <div class="col-md-10">
                 {{$participant->degree}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    کد پیگیری:
                </div>
                <div class="col-md-10">
                 {{$participant->transaction->factorNumber}}
                </div>
            </div>
        </div>
   
	</body>
	
</html>