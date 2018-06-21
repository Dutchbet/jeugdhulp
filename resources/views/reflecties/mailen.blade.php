@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="overlay"></div>

    <div class="fixed-header bg-light">
        <div class="container">
      <div class="body-reflectie">
        <div class="previous">
          <button class="topbar-reflectie-button-left"><a href="{{ url('reflecties/overzicht') }}">Overzicht</button></a>
        </div>
        <h2 class="text-center test2">Uitkomsten versturen</h2>
    </div>
    </div>
    </div>
    <title>Jeugdhulp</title>

</head>
<body>
    <div class="flex-center position-ref full-height">
      <div class="email_content">
        <form action="{{ route('postmail') }}" method="post">
            <input type="email" name="mail" placeholder="Typ hier een e-mailadres" autocomplete="off" required="required" class="emailblok">
                  <button type="submit" class="btn btn-primary register2">Verstuur uitkomsten</button>
            {{ csrf_field() }}
      </div>  </form>
    </div>
</body>
</html>
