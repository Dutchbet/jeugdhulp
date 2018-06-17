
@extends('layouts.app')

@section('content')


<div class="nav-wrapper">
        @if (Route::has('login'))
        <div class="jammen">Jammen</div>
            <div class="morele-jams">App voor morele jamsessies</div>
                @auth
                <div class="btn-group-vertical">
                    <a class="btn btn-primary" href="{{ url('reflecties/reflectie1') }}" role="button">Verder gaan met reflectie</a>
                    <a class="btn btn-primary" href="{{ url('reflecties/reflectie1') }}" role="button">Nieuwe reflectie</a>
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                </div>

                @else
                    <div class="form-group row mb-0">
                      <div class="etische">
                         <div class="btn btn-etische">Etische dilema’s. Hoe kun je hier de beste besluiten in nemen?</div>
                      </div>
                    </div>

                    <div class="form-group row mb-0">
                      <div class="oplossing">
                         <div class="btn btn-oplossing">Jammen biedt de oplossing!</div>
                      </div>
                    </div>

                <!-- Inloggen en registreren -->
                    <div class="form-group row mb-0">
                      <div class="login">
                         <a href="{{ route('login') }}" class="btn btn-login">Inloggen</a>
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                     <div class="register">
                            <a href="{{ route('register') }}" class="btn btn-register">Registreren</a>
                     </div>
                </div>
                @endauth
         
        @endif
</div>
@endsection