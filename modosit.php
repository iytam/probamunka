<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Felhasználó Módósítás</title>
<meta name="generator" content="Bluefish 2.0.1" >
<meta name="author" content="matyas" >
<meta name="date" content="2013-07-23T13:41:40+0100" >
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
	
if(isset($_POST['mod']))
{
$id = $_POST["id"];
      $nev = $_POST["nev"];
      $felhasznalo = $_POST["felhasznalo"];
      $email = $_POST["email"];
      $jelszo = $_POST["jelszo"];
     $modosit = "UPDATE `iytam`.`users` SET `nev` = '".$nev."', `felhasznalo` = '".$felhasznalo."', `email` = '".$email."', `jelszo` = '".$jelszo."' WHERE `users`.`id` = $id";
        mysql_query($modosit);
        header("Location: probamunka.php");
     // echo $modosit;
}
else
{
echo '<strong> Felhasználó Módósítása</strong>';
echo '<form name="modosit" method="post" action=" ' . $_SERVER['PHP_SELF'] .'">
      <input type="text" name="nev" value="'.$_GET[nev].'"><br>
      <input type="text" name="felhasznalo" value="'.$_GET[felhasznalo].'"><br>
  		<input type="text" name="email" value="'.$_GET[email].'"><br>
      <input type="text" name="jelszo" value="'.$_GET[jelszo].'"><br>
      <input type="hidden" name="id" value="'.$_GET[id].'">
      <input name="mod" type="submit"  value="Módósít">
      </form>';
      echo  $sor["nev"];
}

mysql_query($mod);


?>
</body>
</html>
