Tisztelt Munkáltató!

Elnézést kérek, de nem tudtam megoldani a "json" feladatokat,
mert nem értettem. Hisz phpmyadminban, mind import mind exportra van lehetőség.
Valamint a Beléptetés nem MySQL alapú, mivel úgy láttam, hogy amég nincsenek jogosultságok kiosztva,
addig az összes "user" tudna törölni a adatbázisból. Ezért csak egy belépéssel enged be egyenlőre.
felhasználó név: "admin" jelszó "valami" .
Valamint egy sessionban is elmenti, amit késöbiekben ha valós munka lenne, tovább tudna alkalmazni a felhasználó.
Ez még a levédésnél hasznos, hisz így bárki tud törölni adatot. De ahogy kérték nem tőrődtem a védelemmel.

Üzembehelyezés: 

-Apach valamint php és mysql szerver telepítése
-Létrehozni a Mysql-t
  Táblanév : users
	Rekordok:
		id
		nev
		felhasznalo
		email
		jelszo

-Feltölteni az FTP-re

Jelenleg 4 php fileból oldottam meg a munkát. Így volt kényelmes, természetesen összetudnám fésülni,
ha erre lenne igény.
Az ingyenes tárhelymet használtam tesztelésre, a kész munkát ki lehet próbálni.

-Beléptetés : http://iytam.ininet.hu/probamunka/admin.php
-Felhasználó karbantartás: http://iytam.ininet.hu/probamunka/probamunka.php
-Törlő: A karbantartó oldalról érhető el
-Módósító: A karbantartó oldalról érhető el

Üdvözlettel 
Oravecz Mátyás

