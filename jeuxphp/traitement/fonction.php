<?php
function connexion($login, $pwd)
{
    $users=getData();
    foreach ($users as $key => $user) {
        if($user["login"]===$login && $user["password"]===$pwd){
            $_SESSION['user']=$user;
            $_SESSION['log']="login";
            if($user["profil"]==="admin"){
                return "acceuil";
            }else{
                return "jeux";
            }
        }
    }
    return "error";
}

function is_connect(){
    if(!isset( $_SESSION['log'])){
        header("Location:index.php");
    }
}

function deconnexion(){
    unset($_SESSION['user']);
    unset($_SESSION['log']);
    session_destroy();
}

function getData($file="utilisateur")
{
    $data=file_get_contents("../donne/".$file.".json");
    $data=json_decode($data, true);
    return $data;
}


?>