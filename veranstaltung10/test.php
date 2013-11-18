<?php
$url ="http://localhost:8080/share/eclipse_ws/veranstaltung10/index.php?vars=cantons/list/show&sort=Kanton";
//$url ="http://localhost:8080/share/eclipse_ws/veranstaltung10/index.php?vars=cantons/single/show&id=ZH";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
$body = curl_exec($ch); // ALWAYS EMPTY?
curl_close($ch);
// Via json
//$json = json_decode($body);
// Via XML
$xml = new SimpleXMLElement($body);
?>
