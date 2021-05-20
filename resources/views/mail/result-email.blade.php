<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>RICHIESTA APPUNTAMENTO</title>
</head>
<body>
    @include('partials.header')
    Gentile cliente {{$customer->name}} {{$customer->surname}} la sua richiesta
     è stata inviata in data {{ \Carbon\Carbon::parse($customer->updated_at)->format('d/m/Y')}}!

     Verrà ricontattato al più presto da un nostro tecnico per fissare un appuntamento!
     Grazie per la fiducia, a presto!

</body>
</html>
