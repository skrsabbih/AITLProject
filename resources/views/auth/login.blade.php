<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'Laravel') }} Login</title>

  <meta name="description" content="rBilling Login" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <link rel="shortcut icon" href="{{ asset('assets/img/' . config('app.favicon', 'favicon.png')) }}" type="image/x-icon">

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/fonts/font.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/beyond.min.css') }}" rel="stylesheet" />

  <style>
    /* Custom styled checkbox container */
    .loginbox-textbox label.custom-checkbox {
      display: flex;
      align-items: center;
      cursor: pointer;
      user-select: none;
      font-weight: 500;
      color: #333;
      gap: 8px;
      font-size: 0.95rem;
      position: relative;
    }

    /* Hide the native checkbox */
    .loginbox-textbox label.custom-checkbox input[type="checkbox"] {
      opacity: 0;
      position: absolute;
      pointer-events: none;
    }

    /* Create custom checkbox square */
    .loginbox-textbox label.custom-checkbox .checkmark {
      width: 20px;
      height: 20px;
      border: 2px solid #0a67f2;
      border-radius: 4px;
      background-color: white;
      position: relative;
      transition: background-color 0.2s, border-color 0.2s;
    }

    /* Checkmark tick (hidden by default) */
    .loginbox-textbox label.custom-checkbox .checkmark::after {
      content: "";
      position: absolute;
      left: 5px;
      top: 1px;
      width: 6px;
      height: 12px;
      border: solid #0a67f2;
      border-width: 0 2.5px 2.5px 0;
      opacity: 0;
      transform: rotate(45deg);
      transition: opacity 0.2s;
    }

    /* Show tick when checked */
    .loginbox-textbox label.custom-checkbox input[type="checkbox"]:checked + .checkmark::after {
      opacity: 1;
    }

    /* Change border color on hover */
    .loginbox-textbox label.custom-checkbox:hover .checkmark {
      border-color: #084fbb;
    }

    /* Forgot password link styling */
    .loginbox-forgot a {
      color: #0a67f2;
      font-weight: 600;
      text-decoration: none;
      font-size: 0.9rem;
      transition: color 0.2s ease;
    }

    .loginbox-forgot a:hover {
      color: #084fbb;
      text-decoration: underline;
    }
  </style>

  <script src="{{ asset('assets/js/skins.min.js') }}"></script>
</head>

<body>
  <form id="container" method="POST" action="{{ route('login') }}">
    @csrf

    <div class="login-container animated fadeInDown">
      <div class="loginbox bg-white">
        <div class="loginbox-social">
          <div class="social-buttons">
            <img src="{{ asset('assets/img/rerp_logo.png') }}" alt="Logo" style="width: 70%">
          </div>
        </div>
        <div class="loginbox-or">
          <div class="or-line"></div>
        </div>

        {{-- Login input (name or email) --}}
        <div class="loginbox-textbox">
          <input
            type="text"
            class="form-control"
            name="login"
            value="{{ old('login') }}"
            placeholder="Username or Email"
            required
            autofocus
          />
          @error('login')
            <span class="text-danger small">{{ $message }}</span>
          @enderror
        </div>

        {{-- Password --}}
        <div class="loginbox-textbox">
          <input
            type="password"
            class="form-control"
            name="password"
            placeholder="Password"
            required
          />
          @error('password')
            <span class="text-danger small">{{ $message }}</span>
          @enderror
        </div>

        {{-- Remember Me --}}
        <div class="loginbox-textbox">
          <label class="custom-checkbox">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="checkmark"></span>
            Remember Me
          </label>
        </div>

        {{-- Forgot Password --}}
        <div class="loginbox-forgot mb-3">
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot Password?</a>
          @endif
        </div>

        {{-- Submit button --}}
        <div class="loginbox-submit">
          <input type="submit" class="btn btn-primary btn-block" value="Login">
        </div>
      </div>
    </div>
  </form>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/slimscroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/js/beyond.js') }}"></script>
</body>
</html>
