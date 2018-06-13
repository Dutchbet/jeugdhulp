
@extends('layouts.app')

@section('content')


      <div class="overlay"></div>
      <div class="fixed-header bg-light">
          <div class="container">
        <div class="body-reflectie">
          <h2 class="text-center test2">Reflectie</h2>
          <button class="topbar-reflectie-button-left"><a href="{{ url('reflecties/reflectie5') }}">vraag5</button></a>
          <button class="topbar-reflectie-button"><a href="{{ url('reflecties/reflectie7') }}">vraag7</button></a>
      </div>
    </div>
    </div>
  </div>
  <div class="vraagbox-reflectie">
      <div class="vraagbox-reflectie-titel">
            Vraag 6
      </div>
      <div class="vraagbox-reflectie-text">Wie heeft welk belang en welke tegenstellingen zijn daarin?</div>
</div>

@foreach($reflecties as $reflectie)

@if($reflectie->vraagnummer == '6')
    <div class="Reflectie-Response">
     <div class="title-antwoord">
       Antwoord
     </div>      
            {{$reflectie->antwoord}}
        
            </div>
            @endif
          @endforeach
    
<div class="container">
      <form method="post" action="{{url('reflecties')}}" enctype="multipart/form-data">
        @csrf


        <div class="Reflectie-Bottom">
            <div class="antwoordenblok">
      <input type="text" type="text" placeholder="Typ hier uw antwoord" class="Reflectie-input" name="antwoord" id="antwoord">
        <input type="hidden" id="vraagnummer" name="vraagnummer" value="6">
            <button type="submit" class="button-reflectie"><img src="/images/send.svg"></button>
          </div>
        </div>
        </div>
      </div>
      </form>
    </div>


@endsection