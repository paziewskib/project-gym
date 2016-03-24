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
	<title>Panel Użytkownika</title>
</head>
<body>


<a href="logout.php">Wyloguj się</a>
<br><br>
<?php echo $_SESSION['id']; ?> <br>
<?php echo $_SESSION['login']; ?> <br>
<?php echo $_SESSION['firstname']," ",$_SESSION['lastname']; ?> <br>
<?php echo $_SESSION['email']; ?> <br>
<?php echo $_SESSION['height'], " ", $_SESSION['weight']; ?> <br>
<?php echo $_SESSION['age']," ", $_SESSION['sex']; ?> <br>
<?php echo $_SESSION['activity']; ?> <br>
<?php echo $_SESSION['kcal']," ", $_SESSION['carbs']," ", $_SESSION['fats']," ", $_SESSION['proteins'] ; ?> <br>

<form action="pulogic.php" method="post">

    <div class="form-group" style=" width: 500px; margin: 10px auto">
        <label for="exampleInputEmail1">Imię:</label>
        <input type="text" name="firstname" class="form-control" placeholder="Imię"><br>
        <?php
        if(isset($_SESSION['e_firstname']))
        {
            echo $_SESSION['e_firstname']."<br>";
            unset($_SESSION['e_firstname']);
        }
        ?>
        <label for="exampleInputEmail1">Nazwisko:</label>
        <input type="text" name="lastname" class="form-control" placeholder="Nazwisko"><br>
        <?php
        if(isset($_SESSION['e_lastname']))
        {
            echo $_SESSION['e_lastname']."<br>";
            unset($_SESSION['e_lastname']);
        }
        ?>

        <label for="exampleInputEmail1">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Email"><br>
        <?php
        if(isset($_SESSION['e_email']))
        {
            echo $_SESSION['e_email']."<br>";
            unset($_SESSION['e_email']);
        }
        ?>

        <label for="exampleInputEmail1">Wzrost:</label>
        <input type="text" name="height" class="form-control" placeholder="Wzrost"><br>
        <?php
        if(isset($_SESSION['e_height']))
        {
            echo $_SESSION['e_height']."<br>";
            unset($_SESSION['e_height']);
        }
        ?>

        <label for="exampleInputEmail1">Waga:</label>
        <input type="text" name="weight" class="form-control" placeholder="Waga"><br>
        <?php
        if(isset($_SESSION['e_weight']))
        {
            echo $_SESSION['e_weight']."<br>";
            unset($_SESSION['e_weight']);
        }
        ?>
        Aktywność:<br>
        <label class="radio-inline"><input id="inlineRadioSmall" class="radio-inline" type="radio" name="activity" value="small">Nisko aktywny</label>
        <label class="radio-inline"><input id="inlineRadioMedium" class="radio-inline" type="radio" name="activity" value="medium">Średnio aktywny</label>
        <label class="radio-inline"><input id="inlineRadioBig" class="radio-inline" type="radio" name="activity" value="big">Aktywny</label>
        <label class="radio-inline"><input id="inlineRadioBig" class="radio-inline" type="radio" name="activity" value="verybig">Bardzo aktywny</label>
        <br>
        <?php
        if(isset($_SESSION['e_activity']))
        {
            echo $_SESSION['e_activity']."<br>";
            unset($_SESSION['e_activity']);
        }
        ?>

        Typ budowy ciała:<br>
        <label class="radio-inline"><input id="inlineRadioSmall" class="radio-inline" type="radio" name="bodytype" value="ectomorph">Ektomorfik</label>
        <label class="radio-inline"><input id="inlineRadioMedium" class="radio-inline" type="radio" name="bodytype" value="mesomorph">Mezomorfik</label>
        <label class="radio-inline"><input id="inlineRadioBig" class="radio-inline" type="radio" name="bodytype" value="endomorph">Endomorfik</label>
        <br>
        <?php
        if(isset($_SESSION['e_bodytype']))
        {
            echo $_SESSION['e_bodytype']."<br>";
            unset($_SESSION['e_bodytype']);
        }
        ?>


        <label for="exampleInputEmail1">Wiek:</label>
        <input type="text" name="age" class="form-control" placeholder="Wiek"><br>
        <?php
        if(isset($_SESSION['e_age']))
        {
            echo $_SESSION['e_age']."<br>";
            unset($_SESSION['e_age']);
        }
        ?>


        <input type="submit" class="btn btn-primary" value="Edycja profilu" style="margin-top: 10px;">


</body>
</html>