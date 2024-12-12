<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="{{asset('resources/css/login.css')}}">
</head>
<body>
<div class="signup-container">
    <h2>Sign Up</h2>
    <form id="signupForm" action="{{route('sign-up-post')}}" method="POST">
        {{csrf_field()}}
        <input type="email" id="email" placeholder="Email (e.g., example@gmail.com)" name="email" required><br>
        <input type="password" id="password" placeholder="Password" name="password" required><br>
        <button type="submit">Sign Up</button>
    </form>
    <a href="{{route('login')}}">Already have an account? Login</a>
</div>

<script>

</script>
</body>
</html>
