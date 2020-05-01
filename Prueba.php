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
                height:26%;width:12%;position:relative;
                /* background-color: #f7b900; */
            } 
            .imagen{
                height: 68%;width:100%;
            }
            .imagen1{
                display: block;
                /* object-fit: none; */
                height: 38%;width:80%;
                /* object-position: 0% 0%; */
                margin-right: auto;
                margin-left: auto;
                
            border-radius: 34px 34px 34px 34px;
            -moz-border-radius: 34px 34px 34px 34px;
            -webkit-border-radius: 34px 34px 34px 34px;
            border: 8px double #f7b900;
            }
            .Jug{
                color: white;
                font-size:'5%';
                text-align: center;
                height: 0.1%;
            }

            .huevo {
                width: 8%;
                height: 10%;
                position:absolute;
                background-color: white;
                border: 1.2px solid black;
                -moz-border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
                -webkit-border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
                border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            }   
        </style>
        <script type="text/javascript">
            var socket;

            function init() {
                var getUrl = window.location;
                var host = "ws://"+getUrl.host+":9000"; // SET THIS TO YOUR SERVER
                try {
                    socket = new WebSocket(host);
                    log('Servidor - status '+socket.readyState);
                    socket.onopen    = function(msg) { 
                                        log("Bienvenido - status "+this.readyState); 
                                    };
                    socket.onmessage = function(msg) { 
                        document.getElementById('logger2').src = 'Cards/'+msg.data;
                                        
                                    };
                    socket.onclose   = function(msg) { 
                                        log("Desconectado - status "+this.readyState); 
                                    };
                }
                catch(ex){ 
                    log(ex); 
                }
                $("msg").focus();
            }


            function send(data){
                var index = data.lastIndexOf("/");
                var filename = data;
                if(index !== -1) {     
                    filename = 'Poner,'+data.substring(index+1,data.length);
                }

                try { 
                    socket.send(filename);  
                } catch(ex) { 
                    alert('Error al enviar la data'+filename);
                }
            }

            function quit(){
                if (socket != null) {
                    log("Adios!");
                    socket.close();
                    socket=null;
                }
            }

            function reconnect() {
                quit();
                init();
            }

            // Utilities
            function $(id){ return document.getElementById(id); }
            function log(msg){ $("log").innerHTML+="<br>"+msg; }
            function onkey(event){ if(event.keyCode==13){ send(); } }
        </script>

    </head>
    <body background="Imagenes/FondoAzul.jpg" onload="init()">
            <h1 style="color: white;text-align:center;margin-block-start:0%;margin-block-end:0%;">Wizard</h1>
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
                            <div style="height:20%;width:100%;">
                                <p class='Jug'>Godis</p>
                                <p class='Jug'>Score: 0</p>
                            </div>
                            <div style="height:23%;width:100%;border: 3px solid rgba(255,255,255,0.7);border-radius: 11px;">
                                <div class='huevo'style="margin-left:5%"></div>
                                <div class='huevo'style="margin-left:14%"></div>
                                <div class='huevo'style="margin-left:23%"></div>
                                <div class='huevo'style="margin-left:32%"></div>
                                <div class='huevo'style="margin-left:41%"></div>
                                <div class='huevo'style="margin-left:50%"></div>
                                <div class='huevo'style="margin-left:59%"></div>
                                <div class='huevo'style="margin-left:68%"></div>
                                <div class='huevo'style="margin-left:76%"></div>
                                <div class='huevo'style="margin-left:85%"></div>
                                
                                <div class='huevo'style="margin-left:5%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:14%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:23%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:32%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:41%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:50%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:59%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:68%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:76%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:85%;margin-top:11%"></div>
                            </div>
                        </td>
                        <td class='td1' style="margin-left:14%">
                            <img class='imagen1' src="Imagenes/Falco.png" alt=""></img>
                            <div style="height:20%;width:100%;">
                                <p class='Jug'>Godis</p>
                                <p class='Jug'>Score: 0</p>
                            </div>
                            <div style="height:23%;width:100%;border: 3px solid rgba(255,255,255,0.7);border-radius: 11px;">
                                <div class='huevo'style="margin-left:5%"></div>
                                <div class='huevo'style="margin-left:14%"></div>
                                <div class='huevo'style="margin-left:23%"></div>
                                <div class='huevo'style="margin-left:32%"></div>
                                <div class='huevo'style="margin-left:41%"></div>
                                <div class='huevo'style="margin-left:50%"></div>
                                <div class='huevo'style="margin-left:59%"></div>
                                <div class='huevo'style="margin-left:68%"></div>
                                <div class='huevo'style="margin-left:76%"></div>
                                <div class='huevo'style="margin-left:85%"></div>
                                
                                <div class='huevo'style="margin-left:5%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:14%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:23%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:32%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:41%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:50%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:59%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:68%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:76%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:85%;margin-top:11%"></div>
                            </div>
                        </td>
                        <td class='td1' style="margin-left:28%">
                            <img class='imagen1' src="Imagenes/Perfil1.jpg" alt=""></img>
                            <div style="height:20%;width:100%;">
                                <p class='Jug'>Godis</p>
                                <p class='Jug'>Score: 0</p>
                            </div>
                            <div style="height:23%;width:100%;border: 3px solid rgba(255,255,255,0.7);border-radius: 11px;">
                                <div class='huevo'style="margin-left:5%"></div>
                                <div class='huevo'style="margin-left:14%"></div>
                                <div class='huevo'style="margin-left:23%"></div>
                                <div class='huevo'style="margin-left:32%"></div>
                                <div class='huevo'style="margin-left:41%"></div>
                                <div class='huevo'style="margin-left:50%"></div>
                                <div class='huevo'style="margin-left:59%"></div>
                                <div class='huevo'style="margin-left:68%"></div>
                                <div class='huevo'style="margin-left:76%"></div>
                                <div class='huevo'style="margin-left:85%"></div>
                                
                                <div class='huevo'style="margin-left:5%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:14%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:23%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:32%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:41%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:50%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:59%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:68%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:76%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:85%;margin-top:11%"></div>
                            </div>
                        </td>
                        <td class='td1' style="margin-left:42%">
                            <img class='imagen1' src="Imagenes/trump.jpg" alt=""></img>
                            <div style="height:20%;width:100%;">
                                <p class='Jug'>Godis</p>
                                <p class='Jug'>Score: 0</p>
                            </div>
                            <div style="height:23%;width:100%;border: 3px solid rgba(255,255,255,0.7);border-radius: 11px;">
                                <div class='huevo'style="margin-left:5%"></div>
                                <div class='huevo'style="margin-left:14%"></div>
                                <div class='huevo'style="margin-left:23%"></div>
                                <div class='huevo'style="margin-left:32%"></div>
                                <div class='huevo'style="margin-left:41%"></div>
                                <div class='huevo'style="margin-left:50%"></div>
                                <div class='huevo'style="margin-left:59%"></div>
                                <div class='huevo'style="margin-left:68%"></div>
                                <div class='huevo'style="margin-left:76%"></div>
                                <div class='huevo'style="margin-left:85%"></div>
                                
                                <div class='huevo'style="margin-left:5%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:14%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:23%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:32%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:41%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:50%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:59%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:68%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:76%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:85%;margin-top:11%"></div>
                            </div>
                        </td>
                        <td class='td1' style="margin-left:56%">
                            <img class='imagen1' src="Imagenes/Anivia.png" alt=""></img>
                            <div style="height:20%;width:100%;">
                                <p class='Jug'>Godis</p>
                                <p class='Jug'>Score: 0</p>
                            </div>
                            <div style="height:23%;width:100%;border: 3px solid rgba(255,255,255,0.7);border-radius: 11px;">
                                <div class='huevo'style="margin-left:5%"></div>
                                <div class='huevo'style="margin-left:14%"></div>
                                <div class='huevo'style="margin-left:23%"></div>
                                <div class='huevo'style="margin-left:32%"></div>
                                <div class='huevo'style="margin-left:41%"></div>
                                <div class='huevo'style="margin-left:50%"></div>
                                <div class='huevo'style="margin-left:59%"></div>
                                <div class='huevo'style="margin-left:68%"></div>
                                <div class='huevo'style="margin-left:76%"></div>
                                <div class='huevo'style="margin-left:85%"></div>
                                
                                <div class='huevo'style="margin-left:5%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:14%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:23%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:32%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:41%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:50%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:59%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:68%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:76%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:85%;margin-top:11%"></div>
                            </div>
                        </td>
                        <td class='td1' style="margin-left:70%">
                            <img class='imagen1' src="Imagenes/Perfil1.jpg" alt=""></img>
                            <div style="height:20%;width:100%;">
                                <p class='Jug'>Godis</p>
                                <p class='Jug'>Score: 0</p>
                            </div>
                            <div style="height:23%;width:100%;border: 3px solid rgba(255,255,255,0.7);border-radius: 11px;">
                                <div class='huevo'style="margin-left:5%"></div>
                                <div class='huevo'style="margin-left:14%"></div>
                                <div class='huevo'style="margin-left:23%"></div>
                                <div class='huevo'style="margin-left:32%"></div>
                                <div class='huevo'style="margin-left:41%"></div>
                                <div class='huevo'style="margin-left:50%"></div>
                                <div class='huevo'style="margin-left:59%"></div>
                                <div class='huevo'style="margin-left:68%"></div>
                                <div class='huevo'style="margin-left:76%"></div>
                                <div class='huevo'style="margin-left:85%"></div>
                                
                                <div class='huevo'style="margin-left:5%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:14%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:23%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:32%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:41%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:50%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:59%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:68%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:76%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:85%;margin-top:11%"></div>
                            </div>
                        </td>
                        <td class='td1' style="margin-left:84%">
                            <img class='imagen1' src="Imagenes/Perfil1.jpg" alt=""></img>
                            <div style="height:20%;width:100%;">
                                <p class='Jug'>Godis</p>
                                <p class='Jug'>Score: 0</p>
                            </div>
                            <div style="height:23%;width:100%;border: 3px solid rgba(255,255,255,0.7);border-radius: 11px;">
                                <div class='huevo'style="margin-left:5%"></div>
                                <div class='huevo'style="margin-left:14%"></div>
                                <div class='huevo'style="margin-left:23%"></div>
                                <div class='huevo'style="margin-left:32%"></div>
                                <div class='huevo'style="margin-left:41%"></div>
                                <div class='huevo'style="margin-left:50%"></div>
                                <div class='huevo'style="margin-left:59%"></div>
                                <div class='huevo'style="margin-left:68%"></div>
                                <div class='huevo'style="margin-left:76%"></div>
                                <div class='huevo'style="margin-left:85%"></div>
                                
                                <div class='huevo'style="margin-left:5%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:14%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:23%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:32%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:41%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:50%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:59%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:68%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:76%;margin-top:11%"></div>
                                <div class='huevo'style="margin-left:85%;margin-top:11%"></div>
                            </div>
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
                            <img class='imagen' id="logger2" name='1' src="Imagenes/CartaAzul.png" ></img>
                        </td>
                        <td class='td' style="margin-left:56%">
                            <!-- <img class='imagen' src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:70%">
                            <!-- <img class='imagen' src="Imagenes/Perfil1.jpg" alt=""></img> -->
                        </td>
                        <td class='td' style="margin-left:84%">
                            <button style="width: 80%;height:20%;" onclick="send(document.getElementById('logger2').src)">Poner</button>
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
