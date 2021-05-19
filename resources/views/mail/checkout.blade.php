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


  Richiesta ricevuta da : {{ $customer->name}}  {{ $customer->surname}}


 Contenuto messaggio:  {{ $customer->message}}

 contatti cliente:

 - Email : {{$customer->email}}

 - Telefono : {{$customer->phone}}




</body>
</html>
