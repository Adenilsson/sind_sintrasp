<?php
$database = "udemy_loja_online1";
$usernome = "root";
$password = "mg11689465br";

try{
    $ligacao = new PDO("mysql:host=localhost;dbname=$database",$usernome,$password);
    $ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $estado = $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS); 

    echo $estado;
    $ligacao = null;

}catch(PDOException $err){
    echo '<pre>';
    print_r($err);
    echo '<br>';
    print_r($err->errorInfo);
}
