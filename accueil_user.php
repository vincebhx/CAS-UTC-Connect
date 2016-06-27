<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'/>
</head>
<body>
  <h1>Vous êtes connecté avec le compte suivant :</h1>
  <table border="1">
    <tr>
      <th>Login</th>
      <td><?php echo $_SESSION['user'];?></td>
    </tr>
    <tr>
      <th>Nom</th>
      <td><?php echo $_SESSION['nom'];?></td>
    </tr>
    <tr>
      <th>Prénom</th>
      <td><?php echo $_SESSION['prenom'];?></td>
    </tr>
    <tr>
      <th>Mail</th>
      <td><?php echo $_SESSION['mail'];?></td>
    </tr>
  </table>
  <br/>
  <a href="<?php echo $myUrl.'index.php?section=logout';?>">Déconnexion</a>
</body>
</html>
