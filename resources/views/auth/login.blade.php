@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="login_image"><img src="/images/login-icon.png" alt="Log in"></div>

          <div class="inloggen">Inloggen</div>
          <div class="inloggen_info">Vul hier jouw e-mailadress en <br/>wachtwoord in om in te loggen</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                     <div class="inlog_input">
                        <div class="form-group row">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mailadres">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group row">

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Wachtwoord">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>


                    </div>
                  </div>
            <button type="submit" class="btn btn-primary login2">
                {{ __('Inloggen') }}
            </button>

                    <div class="gast">
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Ik heb nog geen account') }}
                        </a>
                    </div>
        </form>
    </div>
</div>
@endsection
