<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title></title>
</head>
<body>


<h2>Richiesta ricevuta da : </h2> <h3> {{ $customer->name}}  {{ $customer->surname}} </h3>

<br>
<h2>Contenuto messaggio: </h2> <h3>{{ $customer->message}}</h3>
<br><br>
<h2>Contatti cliente:</h2>
<br><br>
<h2>- Email : </h2><h3>{{$customer->email}}</h3>
<br><br>
<h2>- Telefono :</h2> <h3>{{$customer->phone}}</h3>
<br><br>
Ricontattare il cliente al più presto per concordare un appuntamento

</body>
</html>
