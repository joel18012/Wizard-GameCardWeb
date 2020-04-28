<html>
    <head>
        <title>
            Juego de Cartas Wizard
        </title>
        <meta name="viewport" content="width=device-width"><link rel='stylesheet' href='flickity.css'><link rel="stylesheet" href="./style.css">
        <script src="flickity.js"></script>
        <style>
            .Perfil {
                position: fixed; 
                height:25%;

            }  
            .Carta {
            height:25%;
            position: fixed;

            border-radius: 34px 34px 34px 34px;
            -moz-border-radius: 34px 34px 34px 34px;
            -webkit-border-radius: 14px 14px 14px 14px;
            border: 4px solid #f7b900;
            }   
            .Cuadro {
            height:25%;
            position: fixed;
            margin-block: 1%;
            }                  
                    
        </style>
    </head>
    <body background="Imagenes/FondoAzul.jpg">
            <table  id='Tablero' style="width: 100%;height:70%">
                <tbody style="color: white">
                    <tr>
                        <td class="Cuadro"><img middle src='Imagenes/Perfil1.jpg' id='perfil1'>Godis</img></td>
                        <td class="Cuadro"><img src='Imagenes/Perfil1.jpg' id='perfil2' >Alan</img></td>
                        <td class="Cuadro"><img src='Imagenes/Perfil1.jpg' id='perfil3' >Alex</img></td>
                        <td class="Cuadro"><img src='Imagenes/trump.jpg' id='Trump' >trump</img></td>
                        <td class="Cuadro"><img src='Imagenes/Perfil1.jpg' id='perfil5' >Edson</img></td>
                        <td class="Cuadro"><img src='Imagenes/Perfil1.jpg' id='perfil6' class="Perfil">Anivia</img></td>
                        <td class="Cuadro"><img src='Imagenes/Perfil1.jpg' id='perfil7' class="Perfil">LongDick</img></td>
                        </tr>
                    <tr>
                        <td><img src='Cards/ygo-cardback.png' class="Carta"></img></td>
                        <td><img src='Cards/image1.png' class="Carta"></img></td>
                        <td><img src='Cards/ygo-cardback.png' class="Carta"></img></td>
                        <td><img src='Cards/ygo-cardback.png' class="Carta"></img></td>
                        <td><img src='Cards/ygo-cardback.png' class="Carta"></img></td>
                        <td><img src='Cards/ygo-cardback.png' class="Carta"></img></td>
                        <td><img src='Cards/ygo-cardback.png' class="Carta"></img></td>
                    </tr>
                </tbody>
            </table>

            <div id='Cartas' hidden class="carousel" style="height: 50%;width: 100%;">
                <?php
                for ($i=1; $i < 61; $i++) { 
                    echo('<img class="carousel-cell" src="Cards/image'.$i.'.png" ></img>');
                }
                ?>
            </div>
            <p hidden class="logger">&nbsp;1</p>
            
        <div >
            <table id='Menu' style="height: 8%;width: 100%;">
                <tbody>
                    <tr>
                        <td><img onclick="cambio()" src='Cards/ygo-cardback.png' style="width: 8%;bottom: 0px;position: absolute;"></img></div></td>
                        <td ></td>
                        <td ></td>
                        <td ><img style="width: 8%;bottom: 0px;position: absolute;" id="logger2" src="Cards/image1.png" ></img></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Aqui falta poner que despliegue tu lista de cartas -->
        
    </body>
    <script>
        function cambio()
        {
            if (document.getElementById('Tablero').hidden == true)
            {
                document.getElementById('Cartas').hidden = true;
                document.getElementById('Tablero').hidden = false;
                
            }
            else
            {
                document.getElementById('Tablero').hidden = true;
                document.getElementById('Cartas').hidden = false;

            }
        }
    </script>
      <script src='jquery-3.1.0.min.js'></script>
        <script src='flickity.js'></script><script  src="./script.js"></script>

</html>

<!-- 
    Tiene que ser 6 jugadores

    una baraja normal todas las cartas 
    4 wizard
    4 jesters

    si le atinasa la prediccion de que si vas a ganar si le atinas te dan 20 puntos y luego te dan 10 por ronda

    si alguien tiene una carta de la carta puesta en la mesa tienes que poner una de ese palo (trump)
    el segundo trump es el jugador y se rota
    
    el primero que pone un wizard gana, si lo pones puedes tirar cualquier gana

    el jester siempre pierde, si todos ponen jester el primero gana
    si el segundo trump pone jester se pasa el jester

    cuando se dan todas cartas se ponen puros jesters

    al perder te quitan 10 puntos 

    OPCIONAL la primera ronda puedes ver las cartas de los demas y no la tuya

    a todos se les da una carta y se pone una carta en la mesa y esa carta gana mas ()
    
    http://www.wizardcards.com/viewthread.php?tid=3116
 -->