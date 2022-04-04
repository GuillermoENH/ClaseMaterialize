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
      <header class="deep-purple lighten-2">
        <section><a href="{{route ('p')}}"><h3 class="center-align black-text">Volver a la pagina principal</h3></a></section>

        <div class="row">
            <div class="col 12">
                <section class="center-align">
                    <h3 class="text pink color">Mapas</h3>
                </section>
                
            </div>
            </div>

            <section class="center-align">
                <div class="container">
                <div class="row">
                    <div class="col l3 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="./Recursos/BindBalo.jpg">
                          <span class="card-action pink darken-4 white-text">Bind</span>
                        </div>
                      </div>
                    </div>
    
    
                        <div class="col l3 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="./Recursos/BrezzeBalo.jpg">
                              <span class="card-action pink darken-4 white-text">Brezze</span>
                            </div>
                          </div>
                        </div>
    
                        <div class="col l3 m6 s12">
                            <div class="card">
                              <div class="card-image">
                                <img src="./Recursos/FracturaBalo.jpg">
                                <span class="card-action pink darken-4 white-text">Fracture</span>
                              </div>
                            </div>
                          </div>
    
                            <div class="col l3 m6 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="./Recursos/HavenBalo.jpg">
                                  <span class="card-action pink darken-4 white-text">Heaven</span>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
            </section>

            <section class="center-align">
                <div class="container">
                <div class="row">
                    <div class="col l4 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="./Recursos/IceboxBalo.jpg">
                          <span class="card-action pink darken-4 white-text">Icebox</span>
                        </div>
                      </div>
                    </div>
    
    
                        <div class="col l4 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="./Recursos/SplitBalo.jpg">
                              <span class="card-action pink darken-4 white-text">Split</span>
                            </div>
                          </div>
                        </div>

                            <div class="col l4 m6 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="./Recursos/AscentBalo.jpg">
                                  <span class="card-action pink darken-4 white-text">Ascent</span>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
            </section>
          </header>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>

@endsection