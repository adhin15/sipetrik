@extends('layouts.app')

@section('content')
 <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-body">

            <div class="wrap-login100">
              <form class="login100-form validate-form" action="{{ route('login') }}" method="post" >
                       {{csrf_field()}}
                <span class="login100-form-logo">
                  <i class="zmdi zmdi-landscape"></i>
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                  Login
                </span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                  <input class="input100" type="email" name="email" placeholder="Username" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                  <input class="input100" type="password" name="password" placeholder="Password" required>
                   @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                  <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                  <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                  <label class="label-checkbox100" for="ckb1">
                    Remember me
                  </label>
                </div>

                <div class="container-login100-form-btn">
                  <button class="login100-form-btn">
                    Login
                  </button>
                </div>

                <div class="text-center p-t-90">
                  <a class="txt1" href="#">
                    Forgot Password?
                  </a>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
