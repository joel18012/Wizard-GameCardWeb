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

            border-radius: 34px 34px 34px 34px;
            -moz-border-radius: 34px 34px 34px 34px;
            -webkit-border-radius: 34px 34px 34px 34px;
            border: 8px double #f7b900;
            }  
            .Carta {
            height:25%;
            position: fixed;

            border-radius: 34px 34px 34px 34px;
            -moz-border-radius: 34px 34px 34px 34px;
            -webkit-border-radius: 14px 14px 14px 14px;
            border: 4px solid #f7b900;
            }   
            .td{
                height:30%;width:13%;position:relative;
            }   
            .td1{
                height:16%;width:12%;position:relative;
            } 
            .imagen{
                height: 68%;width:100%;
            }
            .imagen1{
                display: block;
                height: 38%;width:80%;
                margin-left: auto;
                margin-right: auto;
                
            border-radius: 34px 34px 34px 34px;
            -moz-border-radius: 34px 34px 34px 34px;
            -webkit-border-radius: 34px 34px 34px 34px;
            border: 8px double #f7b900;
            }
            .Jug{
                color: white;
                font-size:'5%';
                text-align: center;
            }
            
                                 
        </style>
    </head>
    <body background="Imagenes/FondoAzul.jpg">
            <h1 style="color: white;text-align:center">Wizard</h1>
                <div  id='Cartas' style="height: 52%;width:99%;margin-top:0%;position:relative;">
                        <div id='Cartas' class="carousel" style="height: 100%;width:99%; position:relative">
                        <?php
                            for ($i=1; $i < 61; $i++) { 
                                echo('<img class="carousel-cell" src="Cards/image'.$i.'.png" ></img>');
                            }
                            ?>
                        </div>
                        <p hidden class="logger">&nbsp;1</p>
                </div>
                <table id ='Tabla' style="width: 99%;height:45%;position:relative;margin-top:0%;">
                    <tbody class='imagen'>
                    <tr id='Tablero' hidden style="height: 26%;width:100%;position:relative">
                        <td class='td1' style="margin-left:0%">
                            <img class='imagen1' src="Imagenes/dogo.jpg" alt=""></img>
                            <p class='Jug'>Godis</p>
                            <p class='Jug'>Score: 0</p>
                        </td>
                        <td class='td1' style="margin-left:14%">
                            <img class='imagen1' src="Imagenes/Falco.png" alt=""></img>
                            <p class='Jug'>Joel</p>
                            <p class='Jug'>Score: 0</p>
                        </td>
                        <td class='td1' style="margin-left:28%">
                            <img class='imagen1' src="Imagenes/Perfil1.jpg" alt=""></img>
                            <p class='Jug'>Alets</p>
                            <p class='Jug'>Score: 0</p>
                        </td>
                        <td class='td1' style="margin-left:42%">
                            <img class='imagen1' src="Imagenes/trump.jpg" alt=""></img>
                            <p class='Jug'>Trump</p>
                            <p class='Jug'>Score: 0</p>
                        </td>
                        <td class='td1' style="margin-left:56%">
                            <img class='imagen1' src="Imagenes/Anivia.png" alt=""></img>
                            <p class='Jug'>Yo</p>
                            <p class='Jug'>Score: 0</p>
                        </td>
                        <td class='td1' style="margin-left:70%">
                            <img class='imagen1' src="Imagenes/Perfil1.jpg" alt=""></img>
                            <p class='Jug'>Alan</p>
                            <p class='Jug'>Score: 0</p>
                        </td>
                        <td class='td1' style="margin-left:84%">
                            <img class='imagen1' src="Imagenes/Perfil1.jpg" alt=""></img>
                            <p class='Jug'>Edson</p>
                            <p class='Jug'>Score: 0</p>
                        </td>
                    </tr>
                    <tr id='Tablero2' hidden style="height: 35%;width:100%;margin-top:24%;position:relative">
                        <td class='td' style="margin-left:0%">
                            <img class='imagen' src="Cards/image1.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:14%">
                            <img class='imagen' src="Cards/image2.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:28%">
                            <img class='imagen' src="Cards/image3.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:42%">
                            <img class='imagen' src="Cards/image4.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:56%">
                            <img class='imagen' src="Cards/image5.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:70%">
                            <img class='imagen' src="Cards/image6.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:84%">
                            <img class='imagen' src="Cards/image59.png" alt=""></img>
                        </td>
                    </tr>                    
                    <tr id='Tablero3' style="height: 30%;width:100%;position:relative;margin-top:54%">
                        <td class='td' style="margin-left:0%">
                            <img onclick="cambio()" class='imagen' src="Imagenes/CartaAzul.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:14%">
                            <!-- <img class='imagen' src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:28%">
                            <!-- <img class='imagen' src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:42%">
                            <img class='imagen' id="logger2" src="Imagenes/CartaAzul.png" ></img>
                        </td>
                        <td class='td' style="margin-left:56%">
                            <!-- <img class='imagen' src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:70%">
                            <!-- <img class='imagen' src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:84%">
                            <button style="width: 80%;height:20%;">Poner</button>
                        </td>
                    </tr>
                    </tbody>
                </table>

           
        
    </body>
    <script>
        function cambio()
        {
            if (document.getElementById('Tablero').hidden == true)
            {
                // document.getElementById('Tabla').style.marginTop = '0%';
                document.getElementById('Tabla').style.height = '90%';
                // document.getElementById('Tablero3').style.height = '33%';
                // document.getElementById('Tablero3').style.marginTop ='66%';
                // document.getElementById('Tablero3').style.position ='none';
                document.getElementById('Tablero').hidden = false;
                document.getElementById('Tablero2').hidden = false;
                document.getElementById('Cartas').hidden = true;
                
                
            }
            else
            {
                // document.getElementById('Tabla').style.marginTop = '32.9%';
                document.getElementById('Tabla').style.height = '45%';
                // document.getElementById('Tablero3').style.height = '50%';
                // document.getElementById('Tablero3').style.marginTop ='0%';
                // document.getElementById('Tablero3').style.position ='fixed';
                document.getElementById('Cartas').hidden = false;
                document.getElementById('Tablero').hidden = true;
                document.getElementById('Tablero2').hidden = true;
                

            }
        }
    </script>
      <script src='jquery-3.1.0.min.js'></script>
        <script src='flickity.js'></script><script  src="./script.js"></script>

</html>
