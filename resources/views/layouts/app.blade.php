<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{url('/css/bootstrap/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{url('/css/font-awesome/css/font-awesome.min.css')}}">
   <title>@yield('title')</title>
</head>
<body>

@yield('content')


@include('layouts.footer')

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('/js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{url('/js/popper.min.js')}}"></script>
    <script src= "{{url('/js/bootstrap/bootstrap.min.js')}}"></script>

</body>
</html>