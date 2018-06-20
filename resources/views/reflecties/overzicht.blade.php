
@extends('layouts.app')

@section('content')


<div class="overlay"></div>
<div class="fixed-header bg-light">
    <div class="container">
  <div class="body-reflectie">
    <div class="previous">
      <button class="topbar-reflectie-button-left"><a href="{{ url('reflecties/reflectie10') }}">Vraag 10</button></a>
    </div>
    <h2 class="text-center test2">Overzicht</h2>
    <div class="next">
      <button class="topbar-reflectie-button-left"><a href="{{ url('reflecties/mailen') }}">Versturen</button></a>
    </div>
</div>
</div>
</div>
</div>
<div class="clearfix">
<div class="vraagbox-reflectie">
<div class="vraagbox-reflectie-titel">
      Vraag 1
</div>
<div class="vraagbox-reflectie-text">Wat heb je gezien en gehoord?</div>
</div>

@foreach($reflecties as $reflectie)

@if($reflectie->vraagnummer == '1')
<div class="Reflectie-Response">
<div class="title-antwoord">
 Antwoord
</div>
      {{$reflectie->antwoord}}

      </div>
      @endif
    @endforeach
    </div>
    <div class="clearfix">
    <div class="vraagbox-reflectie">
            <div class="vraagbox-reflectie-titel">
                  Vraag 2
            </div>
            <div class="vraagbox-reflectie-text">Wat heb je daarbij gedacht en gevoeld?</div>
      </div>

      @foreach($reflecties as $reflectie)

      @if($reflectie->vraagnummer == '2')
          <div class="Reflectie-Response">
           <div class="title-antwoord">
             Antwoord
           </div>
                  {{$reflectie->antwoord}}

                  </div>
                  @endif
                @endforeach
            </div>
            <div class="clearfix">
            <div class="vraagbox-reflectie">
                    <div class="vraagbox-reflectie-titel">
                          Vraag 3
                    </div>
                    <div class="vraagbox-reflectie-text">Wat raakt je in de situatie, welke waarde is voor jou in het geding?</div>
              </div>

              @foreach($reflecties as $reflectie)

              @if($reflectie->vraagnummer == '3')
                  <div class="Reflectie-Response">
                   <div class="title-antwoord">
                     Antwoord
                   </div>
                          {{$reflectie->antwoord}}

                          </div>
                          @endif
                        @endforeach
                        </div>
                        <div class="clearfix">
                        <div class="vraagbox-reflectie">
                                <div class="vraagbox-reflectie-titel">
                                      Vraag 4
                                </div>
                                <div class="vraagbox-reflectie-text">Welke andere waarden zijn er voor jou of voor anderen in de situatie in het geding?</div>
                          </div>

                          @foreach($reflecties as $reflectie)

                          @if($reflectie->vraagnummer == '4')
                              <div class="Reflectie-Response">
                               <div class="title-antwoord">
                                 Antwoord
                               </div>
                                      {{$reflectie->antwoord}}

                                      </div>
                                      @endif
                                    @endforeach
                                    </div>
                                    <div class="clearfix">
                                    <div class="vraagbox-reflectie">
                                            <div class="vraagbox-reflectie-titel">
                                                  Vraag 5
                                            </div>
                                            <div class="vraagbox-reflectie-text">Wie speelt welke rol en klopt dat volgens jou?</div>
                                      </div>

                                      @foreach($reflecties as $reflectie)

                                      @if($reflectie->vraagnummer == '5')
                                          <div class="Reflectie-Response">
                                           <div class="title-antwoord">
                                             Antwoord
                                           </div>
                                                  {{$reflectie->antwoord}}

                                                  </div>
                                                  @endif
                                                @endforeach
                                                </div>
                                                <div class="clearfix">
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
                                                            </div>
                                                            <div class="clearfix">
                                                            <div class="vraagbox-reflectie">
                                                                    <div class="vraagbox-reflectie-titel">
                                                                          Vraag 7
                                                                    </div>
                                                                    <div class="vraagbox-reflectie-text">Formuleer je gewetensvraag, Begn met: moet...? Of:mag...?</div>
                                                              </div>

                                                              @foreach($reflecties as $reflectie)

                                                              @if($reflectie->vraagnummer == '7')
                                                                  <div class="Reflectie-Response">
                                                                   <div class="title-antwoord">
                                                                     Antwoord
                                                                   </div>
                                                                          {{$reflectie->antwoord}}

                                                                          </div>
                                                                          @endif
                                                                        @endforeach
                                                                        </div>
                                                                        <div class="clearfix">
                                                                        <div class="vraagbox-reflectie">
                                                                                <div class="vraagbox-reflectie-titel">
                                                                                      Vraag 8
                                                                                </div>
                                                                                <div class="vraagbox-reflectie-text">Zijn er nog meer gewetensvragen te formuleren?</div>
                                                                          </div>

                                                                          @foreach($reflecties as $reflectie)

                                                                          @if($reflectie->vraagnummer == '8')
                                                                              <div class="Reflectie-Response">
                                                                               <div class="title-antwoord">
                                                                                 Antwoord
                                                                               </div>
                                                                                      {{$reflectie->antwoord}}

                                                                                      </div>
                                                                                      @endif
                                                                                    @endforeach
                                                                                    </div>
                                                                                    <div class="clearfix">
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
                                                                                             Antwoord
                                                                                           </div>
                                                                                                  {{$reflectie->antwoord}}

                                                                                                  </div>
                                                                                                  @endif
                                                                                                @endforeach
                                                                                                </div>
                                                                                                <div class="clearfix">
                                                                                                <div class="vraagbox-reflectie">
                                                                                                        <div class="vraagbox-reflectie-titel">
                                                                                                              Vraag 10
                                                                                                        </div>
                                                                                                        <div class="vraagbox-reflectie-text">Welke stappen ga je in welke volgore zetten?</div>
                                                                                                  </div>

                                                                                                  @foreach($reflecties as $reflectie)

                                                                                                  @if($reflectie->vraagnummer == '10')
                                                                                                      <div class="Reflectie-Response">
                                                                                                       <div class="title-antwoord">
                                                                                                         Antwoord
                                                                                                       </div>
                                                                                                              {{$reflectie->antwoord}}

                                                                                                              </div>
                                                                                                              @endif
                                                                                                            @endforeach
                                                                                                            </div>




  @csrf

  @endsection
