@extends('layouts.app')

@section('content')
<div class="container">
<div class="body-reflectie">
  <div class="previous">
    <button class="btn btn-primary vorige"><a href="{{ url('/') }}"><img src="/images/Combined Shape.png" alt="Vorige"></button></a>
  </div>
    <div class="row justify-content-center"></div>
        <div class="col-md-8">
          <div class="login_image"><img src="/images/login-icon.png" alt="Log in"></div>
            <div class="inloggen">Registratie</div>
          <div class="inloggen_info">Voordat je aan de slag kan, willen we <br/>eerst wat gegevens van jou hebben.</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                     <div class="register_input">
                        <div class="form-group row">

                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-mailadres">

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

                        <div class="form-group row">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Wachtwoord bevestigen">
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <button type="submit" class="btn btn-primary register2">
                    {{ __('Registreer') }}
                </button>
    </form>
    </div>
</div>
@endsection
