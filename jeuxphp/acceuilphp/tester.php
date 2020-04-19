<?php

if(isset($_POST['submit'])){
    $message = array();
    $message['premon']=$_POST['prenom'];
    $message['non']=$_POST['nom'];
    $message['login']=$_POST['login'];
    $message['pwd']=$_POST['pwd'];
    $message['password']=$_POST['password'];
    $message['file']=$_POST['file'];

$js = file_get_contents('utilisateur.json');
$js[] = $message;
$js = json_encode($js);
file_put_contents('utilisateur.json', $js);

echo 'llllll';

}
?>