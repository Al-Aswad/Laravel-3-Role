<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- swiper -->
    <link rel="stylesheet" href="{{url('frontend')}}/libraries/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="{{url('frontend')}}/libraries/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('frontend')}}/style/style.css">
</head>

<body style="overflow-x: hidden">
    
    <main class="">

        @yield('content')

        
    </main>
    <!-- jquery -->
    <script src="libraries/jquery/jquery-3.6.0.min.js "></script>
    <!-- js bootstrap -->
    <script src="libraries/bootstrap/js/bootstrap.min.js "></script>    
</body>

</html>