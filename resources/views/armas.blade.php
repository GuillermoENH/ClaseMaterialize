@extends('plantilla')
@section('content')

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <section><a href="{{route ('p')}}"><h3 class="center-align amber lighten-3">Volver a la pagina principal</h3></a></section>

        <header class="amber lighten-3">
          <h3>Principales armas de Valorant</h3>
      </header>
      <main class="amber lighten-1">

        <section class="center-align">
          <div class="container">
          <div class="row">
              <div class="col l12 m6 s3">
                <div class="card">
                  <div class="card-image">
                    <img src="./Recursos/cherif.png">
                    <span class="card-action amber darken-4 white-text">Sheriff</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </section>

         <section class="center-align">
          <div class="container">
          <div class="row">
              <div class="col l12 m6 s3">
                <div class="card">
                  <div class="card-image">
                    <img src="./Recursos/spectre.png">
                    <span class="card-action amber darken-4 white-text">Spectre</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </section>

         <section class="center-align">
          <div class="container">
          <div class="row">
              <div class="col l12 m6 s3">
                <div class="card">
                  <div class="card-image">
                    <img src="./Recursos/Phantom.png">
                    <span class="card-action amber darken-4 white-text">Phantom</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </section>

         <section class="center-align">
          <div class="container">
          <div class="row">
              <div class="col l12 m6 s3">
                <div class="card">
                  <div class="card-image">
                    <img src="./Recursos/Vandal.png">
                    <span class="card-action amber darken-4 white-text">Vandal</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </section>

         <section class="center-align">
          <div class="container">
          <div class="row">
              <div class="col l12 m6 s3">
                <div class="card">
                  <div class="card-image">
                    <img src="./Recursos/odin.png">
                    <span class="card-action amber darken-4 white-text">Odin</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </section>

         <section class="center-align">
          <div class="container">
          <div class="row">
              <div class="col l12 m6 s3">
                <div class="card">
                  <div class="card-image">
                    <img src="./Recursos/ope.png">
                    <span class="card-action amber darken-4 white-text">Operator</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </section>
        
        </main>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>

@endsection