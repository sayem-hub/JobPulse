<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobPulse | Forgot Password</title>
</head>
<body>
        <h1>Job Pulse</h1>
    <p>You have a password reset request in JobPulse</p>
    <hr>

    <h4>Please follow the link bellow to reset your password:</h4>
    <a href="{{ route('reset.password.get', $token) }}">Reset Password</a>

</body>
</html>