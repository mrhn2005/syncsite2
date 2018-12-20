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
	      جناب آقا/خانم
	      {{$participant->last_name}}
	      <br>
	   ثبت نام شما در رویداد
	   {{$participant->event->name}}
	   با موفقیت انجام شد.
    </h4>
       
        <hr>
        <div class="row" style="direction:rtl;text-align:right;">
          <div class="col-md-2">
              کد رهگیری
          </div>
          <div class="col-md-10">
              {{$participant->transaction->factorNumber}}
          </div>
          <p>
              <a href="http://yasidea.ir/photos/homa/past_workshops/{{$participant->event->poster}}">
                  برای مشاهده فایل پوستر رویداد کلیک کنید
              </a>
          </p>
        </div>
        
        <hr>
        <p style="direction:rtl;text-align:right;">
            با تشکر،
            <br>
            مرکز نوآوری یاس
        </p>
	</body>
	
</html>