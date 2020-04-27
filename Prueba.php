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
                height:100%;width:13%;position:absolute;
                display: block;
            }   
                                 
        </style>
    </head>
    <body background="Imagenes/FondoAzul.jpg">
            <h1 style="color: white;text-align:center">Wizard</h1>
                <div hidden id='Cartas' style="height: 10%;width:99%;margin-top:0%;position:absolute;">
                        <div id='Cartas' class="carousel" style="height: 50%;width:99%;margin-top:10%;position:absolute">
                        <?php
                            for ($i=1; $i < 61; $i++) { 
                                echo('<img class="carousel-cell" src="Cards/image'.$i.'.png" ></img>');
                            }
                            ?>
                        </div>
                        <p hidden class="logger">&nbsp;1</p>
                </div>
                <table id ='Tabla' style="width: 99%;height:90%;position:absolute;margin-top:0%;">
                    <tbody style="height: 100%;width:100%;position:absolute">
                    <tr id='Tablero'  style="height: 30%;width:100%;position:absolute">
                        <td class='td' style="margin-left:0%">
                            <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:14%">
                            <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:28%">
                            <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:42%">
                            <img style="height: 100%;width:100%;position:absolute" src="Imagenes/trump.jpg" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:56%">
                            <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:70%">
                            <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:84%">
                            <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img>
                        </td>
                    </tr>
                    <tr id='Tablero2' style="height: 30%;width:100%;margin-top:27%;position:absolute">
                        <td class='td' style="margin-left:0%">
                            <img style="height: 100%;width:100%;position:absolute" src="Cards/image1.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:14%">
                            <img style="height: 100%;width:100%;position:absolute" src="Cards/image2.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:28%">
                            <img style="height: 100%;width:100%;position:absolute" src="Cards/image3.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:42%">
                            <img style="height: 100%;width:100%;position:absolute" src="Cards/image4.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:56%">
                            <img style="height: 100%;width:100%;position:absolute" src="Cards/image5.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:70%">
                            <img style="height: 100%;width:100%;position:absolute" src="Cards/image6.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:84%">
                            <img style="height: 100%;width:100%;position:absolute" src="Cards/image59.png" alt=""></img>
                        </td>
                    </tr>                    
                    <tr id='Tablero3' style="height: 30%;width:100%;position:absolute;margin-top:54%">
                        <td class='td' style="margin-left:0%">
                            <img onclick="cambio()" style="height: 100%;width:100%;position:absolute" src="Imagenes/CartaAzul.png" alt=""></img>
                        </td>
                        <td class='td' style="margin-left:14%">
                            <!-- <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:28%">
                            <!-- <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:42%">
                            <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" id="logger2" src="Cards/image1.png" ></img>
                        </td>
                        <td class='td' style="margin-left:56%">
                            <!-- <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:70%">
                            <!-- <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:84%">
                            <!-- <img style="height: 100%;width:100%;position:absolute" src="Imagenes/Perfil1.jpg" alt=""></img> -->
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
                document.getElementById('Tabla').style.marginTop = '0%';
                // document.getElementById('Tabla').style.height = '90%';
                document.getElementById('Tablero3').style.height = '33%';
                document.getElementById('Tablero3').style.marginTop ='66%';
                // document.getElementById('Tablero3').style.position ='none';
                document.getElementById('Tablero').hidden = false;
                document.getElementById('Tablero2').hidden = false;
                document.getElementById('Cartas').hidden = true;
                
                
            }
            else
            {
                document.getElementById('Tabla').style.marginTop = '32.9%';
                // document.getElementById('Tabla').style.height = '57.1%';
                document.getElementById('Tablero3').style.height = '50%';
                document.getElementById('Tablero3').style.marginTop ='0%';
                // document.getElementById('Tablero3').style.position ='absolute';
                document.getElementById('Cartas').hidden = false;
                document.getElementById('Tablero').hidden = true;
                document.getElementById('Tablero2').hidden = true;
                

            }
        }
    </script>
      <script src='jquery-3.1.0.min.js'></script>
        <script src='flickity.js'></script><script  src="./script.js"></script>

</html>
