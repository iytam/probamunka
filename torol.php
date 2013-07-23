<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>torles</title>
<meta name="generator" content="Bluefish 2.0.1" >
<meta name="author" content="matyi" >
<meta name="date" content="2013-03-30T15:41:40+0100" >
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



$torol = "DELETE FROM users WHERE id=$_GET[id]";
mysql_query($torol);
echo $torol;

header("Location: probamunka.php");
?>
</body>
</html>
