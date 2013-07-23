<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>belepes</title>
<meta name="generator" content="Bluefish 2.0.1" >
<meta name="author" content="matyas" >
<meta name="date" content="2013-07-23T15:01:17+0100" >
<meta name="copyright" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
</head>
<body>


  	<?php	
		$kapcsolat = mysql_connect("127.0.0.1", "iytam", "lia123");
	if (!$kapcsolat) 
	die("Nem sikerült kapcsolódni az adatbázishoz!"); 
	mysql_select_db("iytam", $kapcsolat) 
	or die("Nem sikerült kiválasztani az adatbázist!");
		
if(isset($_POST['belep']))
		   {
		   if($_POST['jelszo']=="valami" && $_POST['nev']=="admin")
		   	{		
								
				
				$_SESSION['nev']=$_POST['nev'];
				$_SESSION['pass']=$_POST['jelszo'];
					echo 'Sikeresen beléptél!<br><br>';					
				echo '<a href="probamunka.php">Felhasználó karbantartás</a><br><br>';
				$datum = date("Y-m-d H:i"); 
				echo $datum;
				
				}
			else 
				{
				echo 'Elrontottad a nevet vagy a jelszót<br><br>';
				echo '<a href="admin.php">Vissza</a>';
				}
			}
			
		else 
		{
		
		
		echo'	Felhasználónév <br>';
		echo '<FORM ACTION=" ' . $_SERVER['PHP_SELF'] . '" METHOD="POST">
<INPUT TYPE="TEXT" NAME="nev" placehorder="Név"><br>

				Jelszó<br>
				<INPUT TYPE="password" NAME="jelszo" placehorder="Jelszó"><br>
				
				
				
				<INPUT TYPE="Submit" name="belep" Value="Belépés">
</Form>';
			}	
				
				?>
			</div>
</div>
</body>
</html>
