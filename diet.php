<?php

session_start();

if(!isset($_SESSION['zalogowano']))
{
	header('Location: index.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <lang html="pl">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <title>Dieta</title>
</head>
<body>


    <form action="dietlogic.php" method="post">
        <?php
        if(isset($_SESSION['e_kcal']))
        {
            echo $_SESSION['e_kcal']."<br>";
            unset($_SESSION['e_kcal']);
        }
        ?>

        <?php
        if(isset($_SESSION['e_proteins']))
        {
            echo $_SESSION['e_proteins']."<br>";
            unset($_SESSION['e_proteins']);
        }
        ?>

        <?php
        if(isset($_SESSION['e_carbs']))
        {
            echo $_SESSION['e_carbs']."<br>";
            unset($_SESSION['e_carbs']);
        }
        ?>

        <?php
        if(isset($_SESSION['e_fats']))
        {
            echo $_SESSION['e_fats']."<br>";
            unset($_SESSION['e_fats']);
        }
        ?>

        <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="DIETA">
        </div>
    </form>
</body>
</html>