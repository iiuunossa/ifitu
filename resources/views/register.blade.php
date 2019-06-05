<!doctype html>
<html lang="en">

<link rel="stylesheet" href="{{url('/css/bootstrap/bootstrap.min.css')}}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register</title>
</head>
<body>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-warning">Register</div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="success.php" method="">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                    <div class="col-md-6">
                                        <input type="text" id="gender" class="form-control" name="gender">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Date of birth</label>
                                    <div class="col-md-6">
                                        <input type="text" id="date_of_birth" class="form-control" name="date_of_birth">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="weight" class="col-md-4 col-form-label text-md-right">Weight</label>
                                    <div class="col-md-6">
                                        <input type="text" id="weight" class="form-control" name="weight">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="height" class="col-md-4 col-form-label text-md-right">Height</label>
                                    <div class="col-md-6">
                                        <input type="text" id="height" class="form-control" name="height">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="password" class="form-control" name="password">
                                     </div>
                                </div>
                                <div class="form-group row">
                                    <label for="retry_password" class="col-md-4 col-form-label text-md-right">Retry Password</label>
                                    <div class="col-md-6">
                                        <input type="text" id="retry_passwor" class="form-control" name="retry_password">
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

<script src="{{url('/js/jquery-3.4.0.min.js') }}"></script>
<script src="{{url('/js/popper.min.js')}}"></script>
<script src= "{{url('/js/bootstrap/bootstrap.min.js')}}"></script>


</body>
</html>