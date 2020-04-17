joueur
<?php

is_connect();

echo $_SESSION['user']['prenom'] ."<br>";
echo $_SESSION['user']['nom'] ."<br>";
echo $_SESSION['user']['login'] ."<br>";
echo $_SESSION['user']['profil'] ."<br>";
echo $_SESSION['user']['photo'];

?>
<br>
<div class="href">
<a href="index.php?log=off">Déconnexion</a>
</div>