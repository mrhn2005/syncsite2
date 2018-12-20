<html lang="fa" class="no-js">
	<head>
		<!-- Document Settings -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>
		ثبت درخواست رویداد
		
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
	   درخواست رویداد جدید با این مشخصات ثبت شد:
    </h3>
    <div class="container">
        <div class="col-sm-12">
            <h3 style="margin-top:40px;">
                اطلاعات رویداد:
            </h3>
            <hr style="border-top: 3px solid #bbb;">
        </div>
        <div class="row">
          <div class="col-sm-2">
              نام پیشنهادی رویداد:
          </div>
          <div class="col-sm-10">
              {{$event->name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
            نهاد، ارگان، شرکت، سازمان یا نماینده حقیقی متولی رویداد:
          </div>
          <div class="col-sm-10">
              {{$event->organ}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
              توضیح مختصری در ارتباط با رویداد:
          </div>
          <div class="col-sm-10">
              {{$event->desc}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
            شهر برگزاری:
          </div>
          <div class="col-sm-10">
              {{$event->location}}
          </div>
        </div>
        
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
               زمان برگزاری:
          </div>
          <div class="col-sm-10">
              {{$event->time}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
              مدت پیشنهادی:
          </div>
          <div class="col-sm-10">
              {{$event->duration}}
          </div>
        </div>
        <hr>
        
        
        <div class="row">
          <div class="col-sm-2">
               چه افرادی وارد طرح شوند:
          </div>
          <div class="col-sm-10">
              {{$event->attendant}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
               تعداد نفرات ورودی (حداقل):
          </div>
          <div class="col-sm-10">
              {{$event->min}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
               تعداد نفرات ورودی (حداقل):
          </div>
          <div class="col-sm-10">
              {{$event->min}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
               تعداد نفرات ورودی (حداکثر):
          </div>
          <div class="col-sm-10">
              {{$event->max}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
               اهداف و خروجی مد نظر از رویداد:
          </div>
          <div class="col-sm-10">
              {{$event->goal}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
              خلاصه مدل پیشنهادی جهت برگزاری رویداد:
          </div>
          <div class="col-sm-10">
              {{$event->model}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
              سابقه برگزاری رویداد در گذشته:
          </div>
          <div class="col-sm-10">
              {{$event->history}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
              تعداد و توالی زمانی رویدادهای پیشنهادی:
          </div>
          <div class="col-sm-10">
              {{$event->number}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
             مخاطبین رویداد با ذکر اولویت:
          </div>
          <div class="col-sm-10">
              {{$event->audience}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2">
              مفاهیم و سرفصل های محتوای آموزشی رویداد:
          </div>
          <div class="col-sm-10">
              {{$event->content}}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
               هزینه مد نظر جهت برگزاری رویداد:
          </div>
          <div class="col-sm-10">
              {{$event->cost}}
          </div>
        </div>
        
        <div class="col-sm-12">
            <h3 style="margin-top:40px;">
                 اطلاعات برگزارکننده:
            </h3>
            <hr style="border-top: 3px solid #bbb;">
        </div>
        <div class="row">
          <div class="col-sm-2">
             نام خانوادگی:
          </div>
          <div class="col-sm-10" >
              {{$event->last_name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            نام:
          </div>
          <div class="col-sm-10" >
              {{$event->first_name}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
           پست الکترونیکی:
          </div>
          <div class="col-sm-10" >
              {{$event->email}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            شماره تلفن ثابت:
          </div>
          <div class="col-sm-10" >
              {{$event->phone}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            شماره تلفن همراه:
          </div>
          <div class="col-sm-10" >
              {{$event->mobile}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            خلاصه سوابق فعالیت‌های متقاضی (مرتبط با برگزاری رویداد):
          </div>
          <div class="col-sm-10" >
              {{$event->background}}
          </div>
        </div>
    </div>
</body>
	
</html>