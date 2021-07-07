<div class="container-fluid">
    <div class="row">

     <div class="header">
         <div class="list-info-header">
            <ul>
               <li><a href="/"><i class="fas fa-car-side"></i></a></li>
                <li><a href="{{route('about-us')}}"> CHI SIAMO </a></li>
                <li><a href="{{route('services')}}"> SERVIZI </a></li>
                <li><a href="{{route('contact')}}"> CONTATTI  </a></li>
                <li><a href="{{route('appointment')}}"> PRENOTA APPUNTAMENTO</a></li>
                 @auth
                 <li><a href="{{route('login')}}"> ACCEDI</a></li>

                 @endauth
                <li><a href="{{route('register')}}"> REGISTRATI</a></li>




            </ul>

         </div>
     </div>

   </div>
  </div>



