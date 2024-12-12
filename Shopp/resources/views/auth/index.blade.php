<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('resources/css/login.css')}}">
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form id="loginForm" method="POST" action="{{route('login-post')}}">
        {{csrf_field()}}
        <input type="email" id="email" placeholder="Email (e.g., example@gmail.com)" name="email" required><br>
        <input type="password" id="password" placeholder="Password" name="password" required><br>
        <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
        <button type="submit">Login</button>
    </form>
    <a href='{{route('sign-up')}}'>Don't have an account? Sign Up</a>
</div>
<script async src="https://www.google.com/recaptcha/api.js"></script>
</body>
</html>

