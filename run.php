<?php

header('Content-Type: text/html; charset=UTF-8');

$lastname = $_GET['lastname'];
$firstname = $_GET['firstname'];
$email = $_GET['email'];
$gender = $_GET['gender'];
$extra = $_GET['extra'];

echo $lastname;
echo $firstname;
echo $email;
echo $gender;
echo $extra;

$empfanger ="silvan.klausener@gmail.com";
$empfanger2 = "$email";
$betreff = "Kontaktanfrage von deiner Website";
$betreff2 = "Zugangsdaten für den Memberbereich";
$nachricht = "$fullname hat dir eine Nachricht mit folgendem Inhalt geschrieben: $description.";
$nachricht2 = "Guten Tag Herr $lastname \n Sie haben sich mit dieser E-Mail: $email für Zugangsdaten für unseren Memberbereich gemeldet. Die Zugangsdaten sind: \n Benutzername: Motorradfahrer \n Passwort: fahrer123 \n Herr $firstname $lastname wir wünschen Ihnen viel Spass im Memberbereich, schön das sie von uns über $extra erfahren haben. \n Freundliche Grüsse Ihr Motorrad-Team.";

mail($empfanger, $betreff, $nachricht);

mail($empfanger2,$betreff2,$nachricht2)

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nachricht versandt</title>
</head>

<body>

	<h1>Ihre Nachricht wurde erfolgreich versandt</h1>



</body>
</html>
