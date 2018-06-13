
@extends('layouts.app')

@section('content')


      <div class="overlay"></div>
      <div class="fixed-header bg-light">
          <div class="container">
        <div class="body-reflectie">
          <h2 class="text-center test2">Reflectie</h2>
          <button class="topbar-reflectie-button-left"><a href="{{ url('reflecties/reflectie9') }}">vraag9</button></a>
          <button class="topbar-reflectie-button"><a href="{{ url('reflecties/overzicht') }}">Overzicht</button></a>
      </div>
    </div>
    </div>
  </div>
  <div class="vraagbox-reflectie">
      <div class="vraagbox-reflectie-titel">
            Vraag 2
      </div>
      <div class="vraagbox-reflectie-text">Wat heb je daarbij gedacht en gevoeld?</div>
</div>

@foreach($reflecties as $reflectie)

@if($reflectie->vraagnummer == '10')
    <div class="Reflectie-Response">
     <div class="title-antwoord">
       Antwoord
     </div>      
            {{$reflectie->antwoord}}
          <div class="edit-remove">
          <div class="remove">
              <form action="{{action('ReflectieController@destroy', $reflectie->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit"><img class="bin" src="/images/delete-color.svg"></button>
              </form>
            </div>
            
              <a href="{{action('ReflectieController@edit', $reflectie->id)}}" class="edit">Edit</a>
          </div>
            </div>
            @endif
          @endforeach
    
<div class="container">
      <form method="post" action="{{url('reflecties')}}" enctype="multipart/form-data">
        @csrf


        <div class="Reflectie-Bottom">
            <div class="antwoordenblok">
      <input type="text" type="text" placeholder="Typ hier uw antwoord" class="Reflectie-input" name="antwoord" id="antwoord">
        <input type="hidden" id="vraagnummer" name="vraagnummer" value="10">
            <button type="submit" class="button-reflectie"><img src="/images/send.svg"></button>
          </div>
        </div>
        </div>
      </div>
      </form>
    </div>


@endsection