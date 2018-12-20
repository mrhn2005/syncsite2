<html lang="fa" class="no-js">
	<head>
		<!-- Document Settings -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
		ثبت درخواست گردشکار
		
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
            .col-sm-2{
                font-weight:bold;
            }
            th{
                text-align:right !important;
            }
        </style>
	</head>
	<body>
	  <h3 >
	   درخواست گردشکار جدید با این مشخصات ثبت شد:
    </h3>
    <div class="container">
        <div class="col-sm-12">
            <h3 style="margin-top:40px;">
               اطلاعات گردشکار:
            </h3>
            <hr style="border-top: 3px solid #bbb;">
        </div>
        <div class="row">
          <div class="col-sm-2">
              ارگان، موسسه یا دانشگاه سفارش دهنده:
          </div>
          <div class="col-sm-10">
              {{$gardeshkar->organ}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
             تاریخ‌های پیشنهادی:
          </div>
          <div class="col-sm-10">
              {{$gardeshkar->time}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
             هدف از برگزاری رویداد گردشکار:
          </div>
          <div class="col-sm-10">
              {{$gardeshkar->goal}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
             رشته تحصیلی یا تخصص بازدیدکنندگان:
          </div>
          <div class="col-sm-10">
              {{$gardeshkar->audience}}
          </div>
        </div>
        
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
              اهداف برگزاری کارگاه:
          </div>
          <div class="col-sm-10">
              {{$gardeshkar->goal}}
          </div>
        </div>

        <hr>
        <div class="col-sm-12">
            <h3 style="margin-top:40px;">
                اطلاعات درخوست کننده:
            </h3>
            <hr style="border-top: 3px solid #bbb;">
        </div>
        <div class="row">
          <div class="col-sm-2">
             نام خانوادگی:
          </div>
          <div class="col-sm-10" >
              {{$gardeshkar->last_name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            نام:
          </div>
          <div class="col-sm-10" >
              {{$gardeshkar->first_name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
           پست الکترونیکی:
          </div>
          <div class="col-sm-10" >
              {{$gardeshkar->email}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            شماره تماس (تلفن همراه یا ثابت):
          </div>
          <div class="col-sm-10" >
              {{$gardeshkar->phone}}
          </div>
        </div>
        <hr>
    </div>
</body>
	
</html>