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

<!-- etape#2 methode-->

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

</html>