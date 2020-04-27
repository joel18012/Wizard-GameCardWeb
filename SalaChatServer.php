<?php 

require_once('websockets.php');
class SalaChatServer extends WebSocketServer 
{ 
    protected function process ($user, $message) 
    {
        echo 'El Usuario Envio: '.$message.PHP_EOL;
        foreach ($this->users as $currentUser) 
        {
            if($currentUser !== $user)//todos menos el usuario que envio info
            $this->send($currentUser,$message);//manda la info
        }
    }
    protected function connected ($user) 
    {
        echo 'El Usuario se conecto'.PHP_EOL;//mensaje del usuario se a conectado
    }
    protected function closed ($user) 
    {
        echo 'El Usuario se desconecto'.PHP_EOL;//mensaje de el usuario se a desconectado
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