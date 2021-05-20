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
        <div id="app">

            @include('partials.header')

            <div class="container-fluid">
                <div class="row">

                    <!--in this part return a message for the customer -->
                    <div class="customer-message">
                        <h3>
                             Gentile cliente {{$customer->name}} {{$customer->surname}} <br>
                             la sua richiesta
                             è stata inviata in data {{ \Carbon\Carbon::parse($customer->updated_at)->format('d/m/Y')}}!
                        </h3>

                        <h3>
                            Verrà ricontattato al più presto da un nostro tecnico per fissare un appuntamento.
                            Grazie per la fiducia!
                        </h3>
                    </div>


                </div>
            </div>


            <div class="past-customers">

                <div>
                    <customers-component></customers-component>
                </div>
            </div>

        </div>
    <script src="{{asset('js/app.js')}}"></script>
    </body>
    </html>
