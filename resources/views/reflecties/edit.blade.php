@extends('layouts.app')

@section('content')

    <div class="fixed-header bg-light">
    <div class="container">
      <div class="body-reflectie">
        <h2 class="text-center test">Antwoord bewerken</h2>
      </div>
    </div>
  </div>

      <form method="post" action="{{action('ReflectieController@update', $id)}}">


            <div class="Antwoord-aanpassen">
             <div class="title-antwoord">
               Antwoord
             </div>

        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <div class="title-edit">Antwoord aanpassen</div>
            <textarea name="antwoord" class="antwoorden-form" rows="25" cols="30" value="{{$reflecties->antwoord}}"></textarea>
    <!--    <input type="textarea" class="antwoorden-form" name="antwoord" value="{{$reflecties->antwoord}}"> -->
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4"">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>


</html>