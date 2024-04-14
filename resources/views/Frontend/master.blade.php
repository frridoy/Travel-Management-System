
<!doctype html>
<html lang="en">

<head>
    @notifyCss
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="Frontend/assets/images/fav.png" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="/Frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Frontend/assets/css/all.min.css">
    <link rel="stylesheet" href="/Frontend/assets/css/animate.css">
    <link rel="stylesheet" href="/Frontend/assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Frontend/assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/Frontend/assets/css/style.css" />
</head>

<body>
    <x-notify::notify />
    @notifyJs

    <!----- ############# Header ################ ----->

  @include('Frontend.Layouts.header')

  @yield('content')

    <!-- ######## Footer Starts Here ####### -->

      @include('Frontend.Layouts.footer')




</body>

<script src="/Frontend/assets/js/jquery-3.2.1.min.js"></script>
<script src="/Frontend/assets/js/popper.min.js"></script>
<script src="/Frontend/assets/js/bootstrap.min.js"></script>
<script src="/Frontend/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="/Frontend//assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="/Frontend//assets/js/script.js"></script>

</html>
