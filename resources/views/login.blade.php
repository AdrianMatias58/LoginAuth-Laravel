<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Login & Registration Form | Codehal</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <h2>Login</h2>
        <div class="input-group">
          <input type="email" name="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" name="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit">Login</button>

        <div class="social-login">
          <a href="{{ route('google.redirect') }}" class="google-btn">
            Login with Google
          </a>
        </div>

        <div class="signUp-link">
          <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>

    <div class="form-wrapper sign-up">
      <form action="{{ route('register.post') }}" method="POST">
        @csrf
        <h2>Sign Up</h2>
        <div class="input-group">
          <input type="text" name="name" required>
          <label for="">Full Name</label>
        </div>
        <div class="input-group">
          <input type="email" name="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" name="password" required>
          <label for="">Password</label>
        </div>
        <div class="input-group">
          <input type="password" name="password_confirmation" required>
          <label for="">Confirm Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div>
        <button type="submit">Sign Up</button>

        <div class="social-login">
          <a href="{{ route('google.redirect') }}" class="google-btn">
            <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" style="width:20px; margin-right:10px;">
            Continue with Google
        </a>
        </div>

        <div class="signUp-link">
          <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
        </div>
      </form>
    </div>
  </div>
  <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
