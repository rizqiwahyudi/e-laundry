<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/setup_style.css') }}">
    <!-- <script src="../js/setup.js"></script> -->
</head>

<body>
    <div class="container">
        <div class="header">
            <h2 style="text-align: center;">Setup</h2>
        </div>
        <form id="form" class="form" action="" method="post">
            <div class="form-control">
                <label for="username">Username (Space Not Allowed)</label>
                <input type="text" placeholder="Username" id="username" name="username" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Email</label>
                <input type="email" placeholder="Email" id="email" name="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Password" id="password" name="password" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" id="password2" name="confirmPassword" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>