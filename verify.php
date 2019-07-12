<?php
$access_token = 'p4YfWb8mnn2TjqTIWuuCLesKgbkGbTpTPXtkoT9oM9/iafVcRtWfgBqo8psrNFxsfg8+YtMvH0xdN3CC4xub7Cuj0iZa7B0nAUhdMk6ks7G4ihcuG1Ln2XgtHwtvtjqpH3LFwO/5Ie8RaXmxlFWM0wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
