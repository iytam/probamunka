<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Próbamunka</title>
<meta name="generator" content="Bluefish 2.0.1" >
<meta name="author" content="matyas" >
<meta name="date" content="2013-07-23T14:10:17+0100" >
<meta name="copyright" content="probamunka">
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
	$keres = "SELECT * from users";
	$eredmeny = mysql_query($keres) or die("Hiba a kérésben");
	
	if(isset($_POST['hozzaad']))
		
        {
      $nev = $_POST["nev"];
      $felhasznalo = $_POST["felhasznalo"];
      $email = $_POST["email"];
      $jelszo = $_POST["jelszo"];
      mysql_query("INSERT INTO users VALUES('','$nev','$felhasznalo','$email','$jelszo')");
        }
	
	if(isset($_POST['lekerdez']))
{


echo '<table border=0>';
echo '<form name="feltoltes" method="post" action=" ' . $_SERVER['PHP_SELF'] .'">
      <td><input type="text" name="nev" placeholder="Név"></td>
      <td><input type="text" name="felhasznalo" placeholder="Felhasználó név"></td>
  		<td><input type="text" name="email" placeholder="Email cím"></td>
      <td><input type="text" name="jelszo" placeholder="Jelszó"></td>
      <td><input name="hozzaad" type="submit"  value="Hozzáad"></td><tr>';
echo '<td><strong>Név</td><td><strong>Felhasználó név</td><td><strong>Email</td><td><strong>Jelszó</td><tr>';

$eredmeny = mysql_query($keres);
	
while ($sor = mysql_fetch_array ($eredmeny)) 
    {
    echo '</td><td>';
   	 echo  $sor["nev"];
   	 echo '</td><td>';
   	 echo  $sor["felhasznalo"];
   	 echo '</td><td>';
   	 echo  $sor["email"];
   	 echo '</td><td>';
   	 echo  $sor["jelszo"];
   	 echo '</td><td>';
   	 echo '<a href="torol.php?id=' . $sor["id"] . '"> Töröl </a></td>';
   	 echo '</td><td>';
   	 echo '<a href="modosit.php?id=' . $sor["id"] . '&nev=' . $sor["nev"] .'&felhasznalo=' . $sor["felhasznalo"] .'&email=' . $sor["email"] . '&jelszo=' . $sor["jelszo"] .'"> Módósít </a></td><tr><br>';
     }
	echo '</table>';
}
	else 
    {   
	 echo '<strong>Adatbázis lekérdezése :</strong><br><br>
    <form name="adazbazis" action="'. $_SERVER["PHP_SELF"] . '" method="post">
    <input name="lekerdez" type="submit" id="lekerdez" value="Lekérdezés">                       
    </form>';
    }
	?>
