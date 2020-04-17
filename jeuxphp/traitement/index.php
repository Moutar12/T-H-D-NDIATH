<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylecss/integration.css">
    <title>Document</title>
</head>
<body>
<div class="header">
<div class="logo"></div>
<div class="header-text">Le plaisir de jouer</div>
</div>
<div class="content">
    <?php
    session_start();
    require_once("fonction.php");
    if(isset($_GET['lien'])){
        switch($_GET['lien']){
            case "acceuil":
            require_once("../page/admin.php");
            break;
            case "jeux":
                require_once("../page/joueur.php");
        }
    }else{
        if(isset($_GET['log'])  && $_GET['log']==="off"){
            deconnexion();
        }
        require_once("../page/connexion.php");
    }
  

?>
</div>
</body>
</html>