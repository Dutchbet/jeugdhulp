
@extends('layouts.app')

@section('content')


<div class="nav-wrapper">
        @if (Route::has('login'))
        <h1>Jeugdhulp Friesland<h1>
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
                <div class="btn-group">
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                </div>
                @endauth
         
        @endif
</div>
@endsection