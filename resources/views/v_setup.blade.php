<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/setup_style.css') }}">
    <script type="text/javascript" src="{{ asset('/assets/js/sweetalert.js') }}"></script>
    <!-- <script src="../js/setup.js"></script> -->
</head>

<body>
    <div class="container">
        <div class="header">
            <h2 style="text-align: center;">Setup</h2>
        </div>
        <form id="form" class="form" action="" method="post">
            @csrf
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" placeholder="Username" id="username" name="username" value="{{ old('username') }}" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                @if ($errors->has('username'))
                    <span style="color: red;">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                @if ($errors->has('email'))
                    <span style="color: red;">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Password" id="password" name="password" value="{{ old('password') }}"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                @if ($errors->has('password'))
                    <span style="color: red;">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-control">
                <label for="username">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" id="password2" name="confirmPassword" value="{{ old('confirmPassword') }}"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                @if ($errors->has('confirmPassword'))
                    <span style="color: red;">{{ $errors->first('confirmPassword') }}</span>
                @endif
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>