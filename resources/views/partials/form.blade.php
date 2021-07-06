    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <body>

    <div id="start">
    <div class="container">
        <div class="col-md-6 mx-auto text-center">
            <div class="header-title">
                <h1 class="wv-heading--title">
                PRENOTA IL TUO APPUNTAMENTO
                </h1>
                <h2 class="sub-title">
                Sarai contattato appena possibile!
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="myform form ">

            <!-- customer can send a message with request-->

                <form class="needs-validation" action="{{route('appointment.confirm')}}" method="post" novalidate>
                    @csrf
                    @method('post')
                    <div class="form-group required">
                        <label for="name"></label>
                        <input type="text" name="name"  class="form-control my-input {{ $errors->has('name') ? 'is-invalid' : ''}}" id="name" placeholder="Nome" required>

                    </div>

                    <div class="form-group required">
                        <label for="surname"></label>
                        <input type="text" name="surname"  class="form-control my-input  {{ $errors->has('surname') ? 'is-invalid' : ''}}" id="surname" placeholder="Cognome" required>
                    </div>

                    <div class="form-group required">
                        <label for="email"></label>
                        <input type="email" name="email"  class="form-control my-input {{ $errors->has('email') ? 'is-invalid' : ''}}" id="email" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone"></label>
                        <input type="text" name="phone" id="phone"  class="form-control my-input {{ $errors->has('phone') ? 'is-invalid' : ''}}" placeholder="Telefono" required>
                    </div>

                    <div class="form-group">
                        <label for="message"></label>
                        <textarea type="text" rows="2" name="message" id="message"  class="form-control my-input {{ $errors->has('message') ? 'is-invalid' : ''}}" placeholder="Messaggio" required></textarea>
                    </div>

                    <div class="text-center ">
                        <button type="submit" class=" btn btn-block send-button tx-tfm">Invia la tua richiesta</button>
                    </div>

                    <!--errors messages form-->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                      @endif



                </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    </body>
