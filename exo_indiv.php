<!-- etape#4 bouton Reset pour vider la session-->
<?php
session_start();

// Si Reset est cliqué, on vide la session
if(isset($_POST['reset'])) {
    session_unset();
    $prenom = 'anonyme';  // On à anonyme après reset
} 

else {
    if (isset($_GET['first_name'])) {
        $prenom = $_GET['first_name'];
    }
    elseif (isset($_SESSION['first_name'])) {
        $prenom = $_SESSION['first_name'];
    }
    elseif (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
        $prenom = $_POST['first_name'];
        $_SESSION['first_name'] = $prenom;
    }
    else {
        $prenom = 'anonyme';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post">
        <p>Votre prenom : <input type="text" name="first_name" /></p>
        <p>
            <input type="submit" value="OK">
            <input type="submit" name="reset" value="Reset">
        </p>
    </form>

    <?php echo "Bonjour $prenom"; ?>
</body>
</html>