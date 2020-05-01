<?php 

require_once('websockets.php');
class SalaChatServer extends WebSocketServer 
{ 
    var $Mano1 = array(11,22,43,51,35);
    var $Mano2 = array(1,2,3,4,5);
    var $Mano3= array(1,2,3,4,5);
    var $Mano4 = array(1,2,3,4,5);
    var $Mano5 = array(1,2,3,4,5);
    var $Mano6 = array(1,2,3,4,5);
    var $Baraja = array(1,2,3,4,5);

    function actualizar ($user, $message)
    {
        echo 'El Usuario Envio: '.$message;
        foreach ($this->users as $currentUser) 
        {
            if($currentUser !== $user)//todos menos el usuario que envio info
            $this->send($currentUser,$message);//manda la info
        }
    }
    
    protected function process ($user, $message) 
    {
        $message = explode(',',$message);
        switch ($message[0]) {
            case 'Poner':
                $this->actualizar($user, $message[1]);
                break;
            
            default:
                # code...
                break;
        }
        var_dump($message);
    }
    
    protected function connected ($user) 
    {
        echo 'El Usuario se conecto'.PHP_EOL;//mensaje del usuario se a conectado en consola del servidor
    }
    protected function closed ($user) 
    {
        echo 'El Usuario se desconecto'.PHP_EOL;//mensaje de el usuario se a desconectado en consola del servidor
    }
}

$chatServer = new SalaChatServer("192.168.100.8","9000");

try 
{
    $chatServer->run();//intentar correr el servidor donde se almacenan y reenvian toda la info a los usuarios
}
catch (Exception $e) 
{
    $chatServer->stdout($e->getMessage());//mensaje de error si falla en iniciar el servidor
}
?>