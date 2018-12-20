<html lang="fa" class="no-js">
	<head>
		<!-- Document Settings -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
		ثبت درخواست کارگاه
		
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
	   درخواست کارگاه جدید با این مشخصات ثبت شد:
    </h3>
    <div class="container">
        <div class="col-sm-12">
            <h3 style="margin-top:40px;">
                اطلاعات کارگاه:
            </h3>
            <hr style="border-top: 3px solid #bbb;">
        </div>
        <div class="row">
          <div class="col-sm-2">
              موضوع یا عنوان کارگاه:
          </div>
          <div class="col-sm-10">
              {{$workshop->subject}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
              ارگان یا موسسه برگزار کننده:
          </div>
          <div class="col-sm-10">
              {{$workshop->organ}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
             توضیح مختصری در ارتباط با کارگاه:
          </div>
          <div class="col-sm-10">
              {{$workshop->desc}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
              محل برگزاری:
          </div>
          <div class="col-sm-10">
              {{$workshop->location}}
          </div>
        </div>
        
        <hr>
        <div class="row">
          <div class="col-sm-2">
             تاریخ‌های مورد نظر
          </div>
          <div class="col-sm-10">
              {{$workshop->time}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
              اهداف برگزاری کارگاه:
          </div>
          <div class="col-sm-10">
              {{$workshop->goal}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
             مخاطبین کارگاه:
          </div>
          <div class="col-sm-10">
              {{$workshop->audience}}
          </div>
        </div>
        <hr>
        <div class="col-sm-12">
            <h3 style="margin-top:40px;">
                 اطلاعات برگزارکننده:
            </h3>
            <hr style="border-top: 3px solid #bbb;">
        </div>
        <div class="row">
          <div class="col-sm-2" style="color:red;">
             نام خانوادگی:
          </div>
          <div class="col-sm-10" >
              {{$workshop->last_name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            نام:
          </div>
          <div class="col-sm-10" >
              {{$workshop->first_name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
           پست الکترونیکی:
          </div>
          <div class="col-sm-10" >
              {{$workshop->email}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            شماره تماس (تلفن همراه یا ثابت):
          </div>
          <div class="col-sm-10" >
              {{$workshop->phone}}
          </div>
        </div>
        <hr>
    </div>
</body>
	
</html>