        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js"></script>
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
                                Al più presto un tecnico la contatterà per concordare il tipo di lavoro e fissare un appuntamento.
                            <br> Grazie per la fiducia!
                            </h3>
                        </div>


                    </div>
                     <!-- Flash success message -->
                 @if (session()->has('success'))

                 <div
                      x-data = {show:true}
                      x-init="setTimeout( () => show = false, 4000)"
                      x-show="show"
                      class="success-message">
                      <p>{{session('success')}}</p>

                 </div>

                 @endif
                </div>


                <div class="past-customers">

                    <div class="title-under-background">
                        <h2>In molti ci avete già scelto con soddisfazione come vostra autofficina: </h2><br>
                    </div>

                    <!-- Vue component -->
                    <div class="component-part">
                        <customers-component></customers-component>
                    </div>
                </div>



            </div>
        <script src="{{asset('js/app.js')}}"></script>
        </body>
        </html>
