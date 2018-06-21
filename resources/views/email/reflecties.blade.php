<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeugdhulp digitale reflectie</title>
</head>
<body>
<h3>Wat heb je gezien en gehoord?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '1') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Wat heb je daarbij gedacht en gevoeld?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '2') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Wat raakt je in de situatie, welke waarde is voor jou in het geding ?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '3') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Welke andere waarden zijn er voor jou of voor anderen in de situatie in het geding ?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '4') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Wie speelt welke rol en klopt dat volgens jou?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '5') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Wie heeft welk belang en welke tegenstellingen zijn daarin?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '6') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Formuleer je gewetensvraag, Begn met: moet...? Of:mag...?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '7') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Zijn er nog meer gewetensvragen te formuleren?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '8') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Welke vragen zijn nog niet beantwoord?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '9') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
<h3>Wat heb je daarbij gedacht en gevoeld?</h3>
@foreach($reflecties as $reflectie)
@if($reflectie->vraagnummer == '10') 
    <p>{{$reflectie->antwoord}}</p>
@endif
@endforeach
</body>
</html>