<html>
    <head>
        <title>
            Juego de Cartas Wizard
        </title>
        <meta name="viewport" content="width=device-width"><link rel='stylesheet' href='flickity.css'><link rel="stylesheet" href="./style.css">
        <script src="flickity.js"></script>
        <style>
            .Perfil {
            width:80%;
            height:80%;
            padding-top:5%;
            position:relative;

            border-radius: 34px 34px 34px 34px;
            -moz-border-radius: 34px 34px 34px 34px;
            -webkit-border-radius: 34px 34px 34px 34px;
            border: 13px double #f7b900;
            }                           
        </style>
    </head>
    <body background="Imagenes/FondoAzul.jpg">
        <div style="height: 70%;width: 100%;">
            <table hidden id='Tablero' style="height: 100%;width: 100%;">
                <tbody>
                    <tr>
                        <td><div id='perfil1' class="Perfil"></div></td>
                        <td><div id='perfil2' class="Perfil"></div></td>
                        <td><div id='perfil3' class="Perfil"></div></td>
                        <td><div id='Trump' class="Perfil"></div></td>
                        <td><div id='perfil5' class="Perfil"></div></td>
                        <td><div id='perfil6' class="Perfil"></div></td>
                        <td><div id='perfil7' class="Perfil"></div></td>
                        </tr>
                    <tr>
                        <td><div id='perfil1' class="Perfil"></div></td>
                        <td><div id='perfil2' class="Perfil"></div></td>
                        <td><div id='perfil3' class="Perfil"></div></td>
                        <td><div id='Trump' class="Perfil"></div></td>
                        <td><div id='perfil5' class="Perfil"></div></td>
                        <td><div id='perfil6' class="Perfil"></div></td>
                        <td><div id='perfil7' class="Perfil"></div></td>
                    </tr>
                </tbody>
            </table>

            <div id='Cartas' class="carousel">
                <?php
                for ($i=1; $i < 53; $i++) { 
                    echo('<img class="carousel-cell" src="Cards/image'.$i.'.png" ></img>');
                }
                ?>
            </div>
            <br>
            <p class="logger">&nbsp;aaaaaaaaaaaaa</p>
            <img src="Cards/image1.png"></img>
        </div>
        <div>
        <table id='Tablero' style="height: 30%;width: 100%;">
                <tbody>
                    <tr>
                        <td><button onclick="cambio()" class="Perfil" style="width:15%">X</button></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
                document.getElementById('Tablero').hidden = false;
                document.getElementById('Cartas').hidden = true;
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