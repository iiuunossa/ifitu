<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{url('/css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/font-awesome/css/font-awesome.min.css')}}">
    
    <title>Login</title>
</head>
<body>
    <!-- Default form login -->

<div class="row justify-content-center">
<div class="col-md-4 col-md-offset-4 bg-warning">
<form class="text-center border border-light p-5">

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="">Register</a>
    </p>
</div>
</div>
</form>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="{{url('/js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{url('/js/popper.min.js')}}"></script>
    <script src= "{{url('/js/bootstrap/bootstrap.min.js')}}"></script>
    
</body>
</html>