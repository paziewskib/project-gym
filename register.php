<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<lang html="pl">
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
	<title>Załóż darmowe konto!</title>
</head>
<body>
<div class="container" style="margin-top: 20px; width: 550px;">
    <div class="panel panel-default" style="border-color: #d6d6d6;">
                <div class="panel-heading">
                    <p style="font-size: 30px; margin-top: 10px;">Rejestracja</p>
                </div>        
<form action="registerlogic.php" method="post">
    <div class="form-group" style=" width: 500px; margin: 10px auto">
	<label for="exampleInputEmail1">Login:</label>
        <input type="text" name="login" class="form-control" placeholder="Login"><br>
	<?php
		if(isset($_SESSION['e_login']))
		{
			echo $_SESSION['e_login']."<br>";
			unset($_SESSION['e_login']);
		}
	?>
	<label for="exampleInputEmail1">Email:</label>
	<input type="text" name="email"  class="form-control" placeholder="E-mail"><br>
	<?php
		if(isset($_SESSION['e_email']))
		{
			echo $_SESSION['e_email']."<br>";
			unset($_SESSION['e_email']);
		}
	?>
	<label for="exampleInputEmail1">Hasło:</label>
	<input type="password" name="haslo1"  class="form-control" placeholder="Hasło"><br>
	<label for="exampleInputEmail1">Powtórz hasło:</label>
	<input type="password" name="haslo2" class="form-control" placeholder="Powtórz hasło"><br>
	<?php
		if(isset($_SESSION['e_haslo']))
		{
			echo $_SESSION['e_haslo']."<br>";
			unset($_SESSION['e_haslo']);
		}
	?>
	Płeć:
	<label class="radio-inline"><input id="inlineRadio1" class="radio-inline" type="radio" name="gender" value="female">Kobieta</label>
	<label class="radio-inline"><input id="inlineRadio2" class="radio-inline" type="radio" name="gender" value="male">Mężczyzna</label><br>
	<?php
		if(isset($_SESSION['e_gender']))
		{
			echo $_SESSION['e_gender']."<br>";
			unset($_SESSION['e_gender']);
		}
	 ?>
	<input type="submit" class="btn btn-primary" value="Załóż konto" style="margin-top: 10px;">
    </div>
</form>
    <div>
</div>
</body>
</html>