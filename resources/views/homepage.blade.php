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

                        <div class="content-card col-xs-12">
                            <div class="slide-bottom">
                                <div class="card-image">
                                    <img src="{{URL::asset('/images/meccatronico.jpg') }}" alt="">
                                </div>
                            </div>


                            <!--bottom part of card-->
                          <div class="card-bottom">
                              <div class="card-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat commodi repudiandae enim corrupti ad esse aspernatur nesciunt rem cumque necessitatibus. . .</p>
                              </div>
                            <div class="card-button">
                               <a href="{{route('about-us')}}"><button type="button" class="btn btn-secondary">Chi siamo</button></a>
                              </div>
                          </div>
                        </div>

                        <div class="content-card col-xs-12">
                            <div class="slide-bottom">
                                <div class="card-image">
                                    <img src="{{URL::asset('/images/autofficina.jpg') }}" alt="">
                                </div>
                            </div>


                            <!--bottom part of card-->
                          <div class="card-bottom">
                              <div class="card-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat commodi repudiandae enim corrupti ad esse aspernatur nesciunt rem cumque necessitatibus. . .</p>
                              </div>
                            <div class="card-button">
                               <a href="{{route('services')}}"><button  type="button" class="btn btn-secondary">Servizi</button></a>
                              </div>
                          </div>
                        </div>


                        <div class="content-card col-xs-12">
                            <div class="slide-bottom">
                                <div class="card-image">
                                    <img src="{{URL::asset('/images/cortesia.jpg') }}" alt="">
                                </div>
                            </div>


                           <!--bottom part of card-->
                          <div class="card-bottom">
                            <div class="card-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat commodi repudiandae enim corrupti ad esse aspernatur nesciunt rem cumque necessitatibus. . .</p>
                             </div>
                            <div class="card-button">
                              <a href="{{route('appointment')}}"> <button type="button" class="btn btn-secondary">Prenota</button> </a>
                              </div>
                          </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>


  <!-- Register Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @include('partials.register-modal')
        </div>

      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @include('partials.login-modal')
          aoooo
        </div>

      </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>

    </body>
    </html>
