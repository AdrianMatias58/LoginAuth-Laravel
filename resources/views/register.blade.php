<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | CyberPanel</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
  <div class="wrapper" style="height: 620px;"> <div class="form-wrapper">
      <form action="{{ route('register.post') }}" method="POST">
        @csrf
        <h2>Create Account</h2>

        <div class="input-group">
          <input type="text" name="name" value="{{ old('name') }}" required>
          <label>Full Name</label>
        </div>

        <div class="input-group">
          <input type="email" name="email" value="{{ old('email') }}" required>
          <label>Email Address</label>
        </div>

        <div class="input-group">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>

        <button type="submit">Sign Up</button>

        <div class="social-login">
            <a href="{{ route('google.redirect') }}" class="google-btn">
                <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" style="width:18px; margin-right:10px;">
                Register with Google
            </a>
        </div>

        <div class="signUp-link">
          <p>Already have an account? <a href="{{ url('/') }}" class="signInBtn-link">Log In here</a></p>
        </div>
      </form>
    </div>
  </div>

  @if($errors->any())
    <div style="color: #ff0055; text-align: center; margin-top: 20px; font-family: 'Poppins';">
        {{ $errors->first() }}
    </div>
  @endif

</body>
<script src="{{ asset('js/login.js') }}"></script>
</html>
