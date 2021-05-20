    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=

        , initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Autofficina</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>

        <!-- header part -->
        @include('partials.header')

        <!-- Start jumbotron -->
        <div class="container-fluid">
            <div class="row">
                <div class="jumbo-background">

                    <!-- card in jumbotron -->
                    <div class="card-container">

                        <div class="content-card">
                          <div class="card-image">
                              <img src="{{URL::asset('/images/mecc-radio24.jpg') }}" alt="">
                          </div>
                        </div>

                        <div class="content-card">
                            <div class="card-image">
                                <img src="{{URL::asset('/images/autofficina.jpg') }}" alt="">
                            </div>

                        </div>

                        <div class="content-card">
                            <div class="card-image">
                                <img src="{{URL::asset('/images/cortesia.jpg') }}" alt="">
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </body>
    </html>
