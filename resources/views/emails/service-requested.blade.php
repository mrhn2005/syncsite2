<html lang="fa" class="no-js">
	<head>
		<!-- Document Settings -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
		ثبت درخواست خدمات تجاری
		
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
	   درخواست خدمت جدید با این مشخصات ثبت شد:
    </h3>
    <div class="container">
        <div class="col-sm-12">
            <h3 style="margin-top:40px;">
                اطلاعات خدمت مورد نظر:
            </h3>
            <hr style="border-top: 3px solid #bbb;">
        </div>
        <div class="row">
          <div class="col-sm-2">
                                                خدمت مورد نظر خود در حوزه تجاری سازی را تشریح کنید (حداقل 300 کاراکتر)
          </div>
          <div class="col-sm-10">
              {{$service->service}}
          </div>
        </div>
        <hr>

        <div class="col-sm-12">
            <h3 style="margin-top:40px;">
                 اطلاعات درخواست کننده:
            </h3>
            <hr style="border-top: 3px solid #bbb;">
        </div>
        <div class="row">
          <div class="col-sm-2" style="color:red;">
            نام شرکت:
          </div>
          <div class="col-sm-10" >
              {{$service->company}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            مدیرعامل:
          </div>
          <div class="col-sm-10" >
              {{$service->manager}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
           پست الکترونیکی:
          </div>
          <div class="col-sm-10" >
              {{$service->email}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            شماره تماس (تلفن همراه یا ثابت):
          </div>
          <div class="col-sm-10" >
              {{$service->phone}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            آدرس سایت:
          </div>
          <div class="col-sm-10" >
              {{$service->website}}
          </div>
        </div>
    </div>
</body>
	
</html>