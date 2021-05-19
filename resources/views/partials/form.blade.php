<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<body>

<div id="app">
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

        <!-- customer can send a message with its request-->
               <form action="" method="post" >

                  <div class="form-group">
                    <label for="name"></label>
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Nome">
                  </div>

                  <div class="form-group">
                      <label for="surname"></label>
                    <input type="text" name="surname"  class="form-control my-input" id="surname" placeholder="Cognome">
                 </div>

                  <div class="form-group">
                    <label for="email"></label>
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="phone"></label>
                     <input type="text" name="phone" id="phone"  class="form-control my-input" placeholder="Telefono">
                  </div>

                  <div class="form-group">
                    <label for="message"></label>
                    <textarea type="text" rows="8" name="message" id="message"  class="form-control my-input" placeholder="Messaggio"></textarea>
                 </div>

                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Invia la tua richiesta</button>
                  </div>


               </form>
            </div>
         </div>
      </div>
   </div>
</div>

</body>
