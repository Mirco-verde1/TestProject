<div class="container-fluid">
    <div class="row">

     <div class="header">
         <div class="list-info-header">
            <ul>
               <li><a href="/"><i class="fas fa-car-side"></i></a></li>
                <li><a href="{{route('about-us')}}"> CHI SIAMO </a></li>
                <li><a href="{{route('services')}}"> SERVIZI </a></li>
                <li><a href="{{route('contact')}}"> CONTATTI  </a></li>
                @can('list', 'App\Auth\User')
                <li><a href="{{route('appointment')}}"> PRENOTA APPUNTAMENTO</a></li>

                @endcan

            </ul>

         </div>
     </div>

   </div>
  </div>

