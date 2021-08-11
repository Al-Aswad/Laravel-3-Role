<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    @include('includes.backend.style')

</head>

<body id="page-top">

    
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('includes.backend.sidebar')
        
        <div id="content-wrapper" class="d-flex flex-column">

        @yield('content')

        @include('includes.backend.footer')

        @include('includes.backend.script')       

</body>

</html>