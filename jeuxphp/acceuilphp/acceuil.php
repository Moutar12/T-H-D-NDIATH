<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceuil.css">
    <title>Document</title>
    <script>
    function previewImage(event)
    {

        var reader=new FileReader();
        var imageField=document.getElementById("image")
        reader.onload=function()
        {
            if(reader.readyState==2)
            {
                imageField.src=reader.result;
            }
        }
        reader.readAsDataURL(event.target.files[0]);

    }
 
</script>
</head>
<body>
<div class="header">
<div class="logo"></div>
    <div class="header-text">Le plaisir de jouer</div>
</div>
    <div class="content">
<div class="contenue">
<div class="couverture">
<div class="entete">
        <div class="quizz">CRÉER ET  PARAMÉRTER VOS QUIZZ</div>
    </div>
    <div class="conteneur_menu">
<div class="menu">
<div id="menu_vertical">
<div class="img_avatar">
    <input type='file' name="imag" id="image" onchange="previewImage(event)"/ >
    <div class="aaa">AAA</div>
    <div class="bbb">BBB</div>
</div>
<ul class="navigation">
 <li> <a href="#">Liste Questions</a></li>
 <li><a href="inscription.php">Créer Admin</a></li> 
  <li><a href="#">Liste Joueurs</a></li>
  <li><a href="#">Créer Questions</a></li>
  </ul>
  </div>
  <div class="img">
      <img src="./Icones/ic-liste.png" alt="" class="liste_1">
      <img src="./Icones/admin.png" alt="" class="admin">
      <img src="./Icones/ic-liste.png" alt="" class="liste_2">
      <img src="./Icones/ic-ajout.png" alt="" class="ajout">
  </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>