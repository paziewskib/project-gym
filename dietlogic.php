<?php 

session_start();

            $idUser = $_SESSION['id'];


            $kcal = $_SESSION['weight']*24*$_SESSION['activity'];//*$_SESSION['bodytype'];
            $proteins = $kcal * 0.20;
            $carbs = $kcal * 0.5;
            $fats = $kcal * 0.30;

			require_once "connect.php";
			try
                {
                    if($mysqli->connect_errno!=0)
                    {
                        throw new Exeption(mysqli_connect_errno());
                    }
                    else
                    {

						
						if($mysqli->query("UPDATE user SET kcal = '$kcal', proteins = '$proteins', carbs = '$carbs', fats = '$fats' WHERE userID='$idUser'"))
						{
							header('Location: diet.php');
							exit();
						}
						else
						{
							throw new Exeption($mysqli->error);
						}

					$mysqli->close();
				}
			}catch(Exeption $e)
			{
				echo "<br>".$e;		
			}
		header('Location: diet.php')
			
?>

