<!DOCTYPE html>
<html style="position: relative; width:100%" lang="en">
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <title>@yield('title')</title>
        <meta data-n-head="ssr" charset="utf-8" />
        <meta data-n-head="ssr" http-equiv="Cache-Control" content="max-age=0" />
        <meta data-n-head="ssr" http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta data-n-head="ssr" name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
        <meta data-n-head="ssr" name="imagetoolbar" content="no" />

        <meta data-n-head="ssr" name="apple-mobile-web-app-capable" content="yes" />
        <meta data-n-head="ssr" name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <meta data-n-head="ssr" data-hid="description" name="description" content="Trade Easier on Forex, Gold, WTI, Brent Oil, S&amp;P500, Nasdaq100, Facebook, Apple, Amazon and more than 80 trending markets with {{ env('APP_NAME') }}."  />
        <meta
            data-n-head="ssr"
            data-hid="keywords"
            name="keywords"
            content="online trading, Bitcoin trading, Litecoin trading, forex trading, index trading, commodity trading, trading platform, trading brokers, best trading app, trading software, trade forex, trade bitcoin, invest in cryptocurrency, stock trading app, stock trading platform, invest us stock, us stock trading, Amazon stock, Apple stock"
        />
        @stack('top-override')
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">

        <link data-n-head="ssr" rel="stylesheet" type="text/css" href="{{ asset('guest/css/common.css') }}" />
        <link data-n-head="ssr" rel="stylesheet" type="text/css" href="{{ asset('guest/css/font_1270171_zncsv7vfzme.css') }}" />
        <link data-n-head="ssr" rel="preconnect" href="https://fonts.gstatic.com/" />

        <link data-n-head="ssr" rel="stylesheet" href="{{ asset('guest/css/css2b1db.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap') }}" />
        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="{{ asset('guest/js/main.js') }}" defer></script>


        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}" /> -->

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
       
        <link rel="stylesheet" href="{{ asset('guest/css/styles.css') }}" />
        @stack('top')
    </head>
    <body class="lang_class_en" data-n-head="%7B%22class%22:%7B%22ssr%22:%22lang_class_en%22%7D%7D">
        <div class="fix_top" style="display: ;">
            @include('guest.layouts.header-desktop')
            @include('guest.layouts.header-mobile')
        </div>
        <div class="main_con">
            @yield('content')
        </div>
        @include('guest.layouts.24-7-support')
        @include('guest.layouts.scroll-to-top')
        @include('guest.layouts.risk-warning') 
        @stack('bottom')

        <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '5d83b20b7e3e3101861924233aabdea77c5b954a';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

<script>!function(){var e,t,n,a;window.MyAliceWebChat||((t=document.createElement("div")).id="myAliceWebChat",(n=document.createElement("script")).type="text/javascript",n.async=!0,n.src="https://widget.myalice.ai/index.js",(a=(e=document.body.getElementsByTagName("script"))[e.length-1]).parentNode.insertBefore(n,a),a.parentNode.insertBefore(t,a),n.addEventListener("load",(function(){MyAliceWebChat.init({selector:"myAliceWebChat",number:"PETROPULSEDIRECTOR",message:"",color:"#2AABEE",channel:"tg",boxShadow:"none",text:"Message Us",theme:"light",position:"left",mb:"20px",mx:"20px",radius:"20px"})})))}();</script>
    </body>
</html>
