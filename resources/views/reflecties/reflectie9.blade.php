
@extends('layouts.app')

@section('content')


      <div class="overlay"></div>
      <div class="fixed-header bg-light">
          <div class="container">
            <div class="body-reflectie">
              <div class="previous">
                <button class="topbar-reflectie-button-left"><a href="{{ url('reflecties/reflectie8') }}">Vraag 8</button></a>
              </div>
              <h2 class="text-center test2">Reflectie</h2>
              <div class="next">
              <button class="topbar-reflectie-button"><a href="{{ url('reflecties/reflectie10') }}">Vraag 10</button></a>
            </div>
          </div>
    </div>
    </div>
  </div>
  <div class="vraagbox-reflectie">
      <div class="vraagbox-reflectie-titel">
            Vraag 9
      </div>
      <div class="vraagbox-reflectie-text">Welke vragen zijn nog niet beantwoord?</div>
</div>

@foreach($reflecties as $reflectie)

@if($reflectie->vraagnummer == '9')
<div class="Reflectie-Response">
     <div class="title-antwoord">
       ANTWOORD
     </div>
     <div class="Textstyling-antwoord">
            {{$reflectie->antwoord}}
      </div>
          <div class="edit-remove">
          <div class="remove">
              <form action="{{action('ReflectieController@destroy', $reflectie->id)}}" method="post" onclick="return confirm('Weet je zeker dat je het wilt verwijderen?')">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit"><img class="bin" src="/images/delete-color.svg"></button>
              </form>
            </div>

              <a href="{{action('ReflectieController@edit', $reflectie->id)}}" class="edit"><img src="/images/edit-color.svg"></a>
          </div>
            </div>
            @endif
          @endforeach

<div class="container">
      <form method="post" action="{{url('reflecties')}}" enctype="multipart/form-data">
        @csrf


        <div class="Reflectie-Bottom">
            <div class="antwoordenblok">
      <input type="text" type="text" placeholder="Typ hier uw antwoord" class="Reflectie-input" name="antwoord" id="antwoord" autocomplete="off" required="required">
        <input type="hidden" id="vraagnummer" name="vraagnummer" value="9">
            <button type="submit" class="button-reflectie"><img src="/images/send.svg"></button>
          </div>
        </div>

        <!-- Bottom of the reflection page -->
          <div class="hulpmiddel">
           <div class="memo-bottom">
              Voeg een antwoord toe:
            </div>
            <div class="waarden-bottom">
              <div class="collapsible">
              <div class="title_scrollmenu">
                  <div class="title_value"></div>
                    <input type="button" value="Waarden" class="more-button" onclick="more_button();">
              </div>

            <div class='growable'>
                <div class='measuringWrapper'>
                <div class="scrollmenu">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Loyaliteit</td>
                            </tr>
                            <tr>
                                <td>Geduld</td>
                            </tr>
                            <tr>
                                <td>Openheid</td>
                            </tr>
                            <tr>
                                <td>Flexibiliteit</td>
                            </tr>
                            <tr>
                                <td>Rechtvaardig</td>
                            </tr>
                            <tr>
                                <td>Schoonheid</td>
                            </tr>
                            <tr>
                                <td>Respect</td>
                            </tr>
                            <tr>
                                <td>Gemak</td>
                            </tr>
                            <tr>
                                <td>Mededogen</td>
                            </tr>
                            <tr>
                                <td>Vrede</td>
                            </tr>
                            <tr>
                                <td>Betrokkenheid</td>
                            </tr>
                            <tr>
                                <td>Betrouwbaarheid</td>
                            </tr>
                            <tr>
                                <td>Eerlijkheid</td>
                            </tr>
                            <tr>
                                <td>Solidariteit</td>
                            </tr>
                            <tr>
                                <td>Humor</td>
                            </tr>
                            <tr>
                                <td>Dankbaarheid</td>
                            </tr>
                            <tr>
                                <td>Collegialiteit</td>
                            </tr>
                            <tr>
                                <td>Verantwoordelijkheid</td>
                            </tr>
                            <tr>
                                <td>Liefde</td>
                            </tr>
                            <tr>
                                <td>Gelijk(waardig)heid</td>
                            </tr>
                            <tr>
                                <td>Tolerantie</td>
                            </tr>
                            <tr>
                                <td>Zelfstandigheid</td>
                            </tr>
                            <tr>
                                <td>Deskundigheid</td>
                            </tr>
                            <tr>
                                <td>Vrijheid</td>
                            </tr>
                            <tr>
                                <td>Dienstbaarheid</td>
                            </tr>
                            <tr>
                                <td>Zorgzaamheid</td>
                            </tr>
                            <tr>
                                <td>Gehoorzaamheid</td>
                            </tr>
                            <tr>
                                <td>Eigenheid</td>
                            </tr>
                            <tr>
                                <td>Gerechtigheid</td>
                            </tr>
                            <tr>
                                <td>Zinvolheid</td>
                            </tr>
                            <tr>
                                <td>Duidelijkheid</td>
                            </tr>
                            <tr>
                                <td>Veiligheid</td>
                            </tr>
                            <tr>
                                <td>Vetrouwen</td>
                            </tr>
                            <tr>
                                <td>Duurzaamheid</td>
                            </tr>
                          </tbody>
                      </table>
                   </div>
              </div>
              </div>
        </div>
      </div>
      </form>
    </div>


@endsection
