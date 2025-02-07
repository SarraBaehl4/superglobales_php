<!-- etape#1: methode $_GET-->

<!-- <!DOCTYPE html>
<html> 
<?php
if (isset($_GET['first_name'])) {
   echo "Bonjour " . $_GET['first_name'];
} else {
   echo "Bonjour anonyme";
}
?>
</html> -->

<!-- etape#2 methode $_POST-->
<!-- 
<html> 
<form action="exo_indiv.php" method="post">
 <p>Votre nom : <input type="text" name="first_name" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php
if (isset($_GET['first_name'])) {
   $prenom = $_GET['first_name'];
} elseif (isset($_POST['first_name'])) {
   $prenom = $_POST['first_name'];
} else {
   $prenom = 'anonyme';
}
echo "Bonjour $prenom";
?>

</html> -->
<!-- etape#3 $_SESSION-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<form method="post">
   <p>Votre prenom : <input type="text" name="first_name" /></p>
   <p><input type="submit" value="OK"></p>
</form>
<?php
  //vérifier l'URL (GET)
  if (isset($_GET['first_name'])) {
   $prenom = $_GET['first_name'];
   // On ne sauvegarde pas dans la session car c'est prioritaire
}
//Vérifier la SESSION
elseif (isset($_SESSION['first_name'])) {
   $prenom = $_SESSION['first_name'];
}
//Vérifier le POST et sauvegarder dans la SESSION
elseif (isset($_POST['first_name'])) {
   $prenom = $_POST['first_name'];
   $_SESSION['first_name'] = $prenom; // Sauvegarde dans la session
}
//Sinon, utiliser 'anonyme'
else {
   $prenom = 'anonyme';
}

echo "Bonjour $prenom";
?>

</html>