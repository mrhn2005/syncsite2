<span id="sidenav" onclick="openNav()">
<i class="fa fa-navicon"></i>    
</span>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <nav>
      <ul class="nav">
        <li><a href="{{route('home')}}">
                مرکز نوآوری یاس- صفحه اصلی
            </a>
        </li>
        <li>
            <a href="#" class="toggle-custom" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">
                شتابدهنده سیمرغ
                <span class="glyphicon glyphicon-plus floatleft" aria-hidden="true">
                
                </span>
            </a>
          <ul class="nav collapse" id="submenu1" role="menu" >
            <li><a href="{{route('30morgh')}}">
                    صفحه اصلی
                </a>
            </li>
            <li><a href="{{route('30morgh.register')}}">
                    ثبت نام در فرآیند پیش شتابدهی
                </a>
            </li>
            
          </ul>
        </li>
        <li>
            <a href="#" class="toggle-custom" data-toggle="collapse" data-target="#submenu2" aria-expanded="false">
                رویدادهای کارآفرینی هدهد
                <i class="glyphicon glyphicon-plus " aria-hidden="true">
                
                </i>
            </a>
          <ul class="nav collapse" id="submenu2" role="menu" >
            <li><a href="{{route('hodhod')}}">
                    صفحه اصلی
                </a>
            </li>
            <li><a href="{{route('hodhod.event','gardeshkar')}}">
                  گردشکار
                </a>
            </li>
            <li><a href="{{route('hodhod.gardeshkar.form')}}">
                  درخواست گردشکار
                </a>
            </li>
            <li><a href="{{route('hodhod.register')}}">
                  درخواست رویداد
                </a>
            </li>
            
          </ul>
        </li>
         <li>
            <a href="#" class="toggle-custom" data-toggle="collapse" data-target="#submenu3" aria-expanded="false">
                هدفمندسازی محتوا و آموزش هما
                <i class="glyphicon glyphicon-plus " aria-hidden="true">
                
                </i>
            </a>
          <ul class="nav collapse" id="submenu3" role="menu" >
            <li><a href="{{route('homa')}}">
                    صفحه اصلی
                </a>
            </li>
            <li><a href="{{route('homa.register')}}">
                 درخواست کارگاه
                </a>
            </li>
            <li><a href="{{route('homa.upload')}}">
                  ارسال محتوا در حوزه کارآفرینی
                </a>
            </li>
          </ul>
        </li>
        <li>
            <a href="#" class="toggle-custom" data-toggle="collapse" data-target="#submenu4" aria-expanded="false">
                مرکز خدمات تجاری ققنوس
                <i class="glyphicon glyphicon-plus " aria-hidden="true">
                
                </i>
            </a>
          <ul class="nav collapse" id="submenu4" role="menu" >
            <li><a href="{{route('ghoghnoos')}}">
                    صفحه اصلی
                </a>
            </li>
            <li><a href="{{route('ghoghnoos.register')}}">
                 درخواست خدمات
                </a>
            </li>
          </ul>
        </li>
        <li><a href="{{route('blog')}}">
                تازه‌ها- آخرین خبرهای یاس
            </a>
        </li>
      </ul>
    </nav>
</div>

