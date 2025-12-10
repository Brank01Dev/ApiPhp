<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'https://dogapi.dog/api/v2/facts');

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$raw = curl_exec($curl);

curl_close($curl);

$parser = json_decode($raw, true);

$fakt = $parser["data"][0]["attributes"]["body"];

echo $fakt

?>