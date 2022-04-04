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
<header class="blue darken-3">
        <section class="blue lighten-3"><a href="{{route ('p')}}"><h3 class="center-align black-text">Volver a la pagina principal</h3></a></section>

        <div class="row">
            <div class="col 12">
                <section class="center-align">
                    <h3 class="text pink color">Controladores</h3>
                </section>
                
            </div>
            </div>

        <section class="center-align blue lighten-3">
            <div class="container">
            <div class="row">
                <div class="col l3 m6 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="./Recursos/Astrabalo.jpg">
                      <span class="card-action pink darken-4 white-text">Astra</span>
                    </div>
                    <div class="card-content">
                      <p>La agente ghanesa Astra canaliza las energías del cosmos para remodelar los campos de batalla a su antojo. Con pleno dominio de su forma astral y un talento para una profunda previsión estratégica, siempre está eones por delante del próximo movimiento de su enemigo.<br><br><br></p>
                    </div>
                  </div>
                </div>


                    <div class="col l3 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="./Recursos/Brimbalo.jpg">
                          <span class="card-action pink darken-4 white-text">Brimstone</span>
                        </div>
                        <div class="card-content">
                          <p> Proveniente de Estados Unidos, Brimstone proporciona una constante ventaja para su
                              equipo con su arsenal orbital. Su habilidad otorga información de forma precisa 
                              y a distancia, lo que lo hace un comandante sin igual en el campo.
                              <br><br>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col l3 m6 s12">
                        <div class="card">
                          <div class="card-image">
                            <img src="./Recursos/Omenbalo.jpg">
                            <span class="card-action pink darken-4 white-text">Omen</span>
                          </div>
                          <div class="card-content">
                            <p> Un espectro de la memoria, Omen caza entre las sombras, ciega a los enemigos, se transporta a través del campo de batalla y deja que la paranoia los invada mientras intentan descubrir dónde atacará.
                                <br><br>
                            </p>
                          </div>
                        </div>
                      </div>

                        <div class="col l3 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="./Recursos/Viperbalo.jpg">
                              <span class="card-action pink darken-4 white-text">Viper</span>
                            </div>
                            <div class="card-content">
                              <p> Química estadounidense, Viper despliega varios artefactos químicos venenosos para controlar el campo de batalla y afectar la visión de los enemigos. Si las toxinas no asesinan a su presa, sin duda lo harán sus juegos mentales.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
        </section>

        <div class="row">
            <div class="col 12">
                <section class="center-align">
                    <h3 class="text pink color">Inciadores</h3>
                </section>
                
            </div>
            </div>

            <section class="center-align blue lighten-3">
                <div class="container">
                <div class="row">
                    <div class="col l3 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="./Recursos/brechasbaloran.jpg">
                          <span class="card-action pink darken-4 white-text">Breach</span>
                        </div>
                        <div class="card-content">
                          <p>Breach, el sueco biónico, lanza poderosas ráfagas cinéticas para abrirse paso a la fuerza a través del territorio enemigo. El daño y la interrupción que inflige garantizarán que ninguna pelea sea justa.<br><br><br></p>
                        </div>
                      </div>
                    </div>
    
    
                        <div class="col l3 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="./Recursos/kayobaloran.jpg">
                              <span class="card-action pink darken-4 white-text">Kay/o</span>
                            </div>
                            <div class="card-content">
                              <p> KAY/O es una máquina de guerra creada con un solo propósito: neutralizar radiantes. Su poder para suprimir las habilidades enemigas neutraliza la capacidad de sus rivales para contraatacar, un aspecto que le da a él y a sus aliados la ventaja definitiva en la batalla.
                                  <br><br>
                              </p>
                            </div>
                          </div>
                        </div>
    
                        <div class="col l3 m6 s12">
                            <div class="card">
                              <div class="card-image">
                                <img src="./Recursos/Sovabaloran.jpg">
                                <span class="card-action pink darken-4 white-text">Sova</span>
                              </div>
                              <div class="card-content">
                                <p> Proveniente de la tundra del eterno invierno de Rusia. Sova rastrea, encuentra y elimina a sus enemigos con gran eficiencia y precisión. Su arco personalizado y sus increíbles habilidades de exploración impedirán que sus enemigos puedan esconderse de él
                                    <br><br>
                                </p>
                              </div>
                            </div>
                          </div>
    
                            <div class="col l3 m6 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="./Recursos/skyebaloran.jpg">
                                  <span class="card-action pink darken-4 white-text">Skye</span>
                                </div>
                                <div class="card-content">
                                  <p> Procedentes de Australia, Skye y su manada de bestias se abren paso por territorio hostil. Con sus creaciones que obstaculizan al enemigo y su poder para sanar a los demás, los equipos serán más fuertes y seguros al lado de Skye.
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
            </section>
        
            <div class="row">
                <div class="col 12">
                    <section class="center-align">
                        <h3 class="text pink color">Centinelas</h3>
                    </section>
                    
                </div>
                </div>

                <section class="center-align blue lighten-3">
                    <div class="container">
                    <div class="row">
                        <div class="col l3 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="./Recursos/chambasbaloran.jpg">
                              <span class="card-action pink darken-4 white-text">Chamber</span>
                            </div>
                            <div class="card-content">
                              <p>Bien vestido y bien armado, el diseñador de armas francés Chamber repele agresores con una precisión mortal. Aprovecha su arsenal personalizado para mantener a los enemigos a raya y eliminarlos desde lejos. Siempre cuenta con la contingencia perfecta para cada plan.<br><br><br></p>
                            </div>
                          </div>
                        </div>
        
        
                            <div class="col l3 m6 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="./Recursos/cypherbaloran.jpg">
                                  <span class="card-action pink darken-4 white-text">Cypher</span>
                                </div>
                                <div class="card-content">
                                  <p> Cypher, el agente de información marroquí, es un sistema de vigilancia de un solo hombre que puede monitorear todos los movimientos de sus enemigos. No hay secreto que no descubra ni maniobra que no detecte. Cypher siempre está vigilando.
                                      <br><br>
                                  </p>
                                </div>
                              </div>
                            </div>
        
                            <div class="col l3 m6 s12">
                                <div class="card">
                                  <div class="card-image">
                                    <img src="./Recursos/killjoybaloran.jpg">
                                    <span class="card-action pink darken-4 white-text">Killjoy</span>
                                  </div>
                                  <div class="card-content">
                                    <p> Killjoy, la prodigio de Berlín, asegura fácilmente el campo de batalla con un arsenal de dispositivos. Si el daño que inflige su equipamiento no detiene a sus enemigos, la debilitación de sus robots la ayudarán a aniquilarlos.
                                        <br><br>
                                    </p>
                                  </div>
                                </div>
                              </div>
        
                                <div class="col l3 m6 s12">
                                  <div class="card">
                                    <div class="card-image">
                                      <img src="./Recursos/sagebaloran.jpg">
                                      <span class="card-action pink darken-4 white-text">Sage</span>
                                    </div>
                                    <div class="card-content">
                                      <p> El bastión de China. Sage proporciona seguridad para sí misma y para su equipo en cualquier lugar. Gracias a su capacidad de revivir a sus compañeros caídos y evitar ataques agresivos, les da un lugar de protección en medio de la caótica pelea.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                </section>

                <div class="row">
                    <div class="col 12">
                        <section class="center-align">
                            <h3 class="text pink color">Duelistas</h3>
                        </section>
                        
                    </div>
                    </div>

                    <section class="center-align blue lighten-3">
                        <div class="container">
                        <div class="row">
                            <div class="col l4 m6 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="./Recursos/jettbaloran.jpg">
                                  <span class="card-action pink darken-4 white-text">Jett</span>
                                </div>
                                <div class="card-content">
                                  <p>Proviene de Corea del Sur. El ágil y evasivo estilo de pelea de Jett le permite enfrentarse a riesgos que otros no pueden. Es imparable en todos los enfrentamientos y acaba con sus enemigos antes de que sepan qué los atacó.<br><br><br></p>
                                </div>
                              </div>
                            </div>
            
            
                                <div class="col l4 m6 s12">
                                  <div class="card">
                                    <div class="card-image">
                                      <img src="./Recursos/neonbaloran.jpg">
                                      <span class="card-action pink darken-4 white-text">Neon</span>
                                    </div>
                                    <div class="card-content">
                                      <p> La agente filipina, Neon, avanza a velocidades impactantes, descargando ráfagas de energía bioeléctrica tan rápido como su cuerpo la genera. Se adelanta velozmente a sus enemigos para atraparlos desprevenidos y luego los fulmina más rápido que un rayo.
                                          <br><br>
                                      </p>
                                    </div>
                                  </div>
                                </div>
            
                                    <div class="col l4 m6 s12">
                                      <div class="card">
                                        <div class="card-image">
                                          <img src="./Recursos/phoenixbaloran.jpg">
                                          <span class="card-action pink darken-4 white-text">Phoenix</span>
                                        </div>
                                        <div class="card-content">
                                          <p>Proviene del Reino Unido. El poder estelar de Phoenix se manifiesta en su estilo de combate al incendiar el campo de batalla con sus granadas aturdidoras y cegadoras. Sin importar si cuenta con apoyo o no, participará en la batalla bajo sus propios términos.
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                    </section>

                    <section class="center-align blue lighten-3">
                        <div class="container">
                        <div class="row">
                            <div class="col l4 m6 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="./Recursos/razebaloran.jpg">
                                  <span class="card-action pink darken-4 white-text">Raze</span>
                                </div>
                                <div class="card-content">
                                  <p>Raze llega de Brasil con su explosiva personalidad y sus grandes armas. Gracias a su contundente estilo de juego, es muy buena para separar los enemigos atrincherados y para despejar espacios estrechos con una gran cantidad de explosiones.<br><br><br></p>
                                </div>
                              </div>
                            </div>
            
            
                                <div class="col l4 m6 s12">
                                  <div class="card">
                                    <div class="card-image">
                                      <img src="./Recursos/reynabaloran.jpg">
                                      <span class="card-action pink darken-4 white-text">Reyna</span>
                                    </div>
                                    <div class="card-content">
                                      <p> Desde el corazón de México, Reyna llega para dominar los duelos uno contra uno y cada asesinato que realiza aumenta su poder. Su letalidad solo está limitada por tu destreza al usarla, por lo que su eficacia dependerá mucho de ello.
                                          <br><br>
                                      </p>
                                    </div>
                                  </div>
                                </div>
            
                                    <div class="col l4 m6 s12">
                                      <div class="card">
                                        <div class="card-image">
                                          <img src="./Recursos/yorubaloran.jpg">
                                          <span class="card-action pink darken-4 white-text">Yoru</span>
                                        </div>
                                        <div class="card-content">
                                          <p> El nativo de Japón, Yoru, fractura la realidad para infiltrarse en las líneas enemigas sin ser visto. Con engaños y agresividad por igual, sorprende a sus objetivos antes de que sepan dónde buscarlo.
                                          </p>
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