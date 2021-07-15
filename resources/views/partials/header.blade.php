        <div class="container-fluid">
            <div class="row">

            <div class="header">
                <div class="list-info-header">
                    <ul>
                    <li><a href="/"><i class="fas fa-car-side"></i></a></li>
                        <li><a href="{{route('about-us')}}"> CHI SIAMO </a></li>
                        <li><a href="{{route('services')}}"> SERVIZI </a></li>
                        <li><a href="{{route('contact')}}"> CONTATTI  </a></li>

                        @auth
                        <li><a href="{{route('appointment')}}"> PRENOTA APPUNTAMENTO</a></li>

                        @endauth

                  @if(!isset($users))
                  <li type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalLong">
                    REGISTRATI
                    </li>
                    <li type="button" class="btn btn-secondary" data-toggle="modal" data-target="#login-modal">
                        ACCEDI
                    </li>
                  @endif







                    </ul>

                </div>
            </div>

        </div>
        </div>



