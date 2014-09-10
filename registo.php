<?php
    $realname =$_POST["realname"];
    $user     =$_POST['username'];
    $mail     =$_POST['email'];
    $pass     =$_POST['pass'];
    $rpass    =$_POST['rpass'];
    $reqlen   = strlen($user) + strlen($pass)+ strlen($rpass);
if ($reqlen > 0){
    if ($pass === $rpass){
        require ("connection.php");
        
        
    }else{
        echo "Las contraseñas no coinciden.";
    }
    
} else{
       echo "Llene todos los campos requeridos.";
}

?>