<html lang="fa" class="no-js">
	<head>
		<!-- Document Settings -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" question="IE=edge">
		<meta name="viewport" question="width=device-width, initial-scale=1">

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
	  
    <div class="container">
        <h3 >
    	   سوال یا درخواست جدید در سایت ثبت شد.
        </h3>

        <div class="row">
          <div class="col-sm-2">
             نام:
          </div>
          <div class="col-sm-10" >
              {{$question->name}}
          </div>
        </div>
        <hr>
        
        <div class="row">
          <div class="col-sm-2" style="">
           پست الکترونیکی:
          </div>
          <div class="col-sm-10" >
              {{$question->email}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            شماره تماس:
          </div>
          <div class="col-sm-10" >
              {{$question->phone}}
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2" style="">
            پیام:
          </div>
          <div class="col-sm-10" >
              {{$question->request}}
          </div>
        </div>
        
        
    </div>
</body>
	
</html>