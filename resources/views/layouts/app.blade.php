<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
      
      <!-- site metas -->
      <title>Al-Tameer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{URL::asset('./images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{URL::asset('./css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <title>al-tamer yemni compay </title>
  <link rel="icon" type="image/x-icon" href="{{URL::asset('images/logo.ico')}}">
   </head>

    <!-- body -->
    <body class="main-layout">

        {{-- <body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}"> --}}

             @yield('content')

            <!-- Javascript files-->
            <script src="{{URL::asset('js/jquery.min.js')}}"></script>
            <script src="{{URL::asset('js/bootstrap.bundle.min.js')}} "></script>
            <script src="{{URL::asset('js/jquery-3.0.0.min.js')}} "></script>
            <!-- sidebar -->
            <script src="{{URL::asset('js/jquery.mCustomScrollbar.concat.min.js')}} "></script>
            <script src="{{URL::asset('js/custom.js')}} "></script>
            <script>
               let popup = document.getElementById("popup");
              function openPopup(){
               popup.classList.add("open-popup");
                }
              function closePopup(){
                popup.classList.add("close-popup");
            }
   </script>
    </body>
</html>
