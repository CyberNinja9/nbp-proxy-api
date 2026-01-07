<?php
header("Content-Type: application/json");

$url = "https://api.nbp.pl/api/exchangerates/rates/a/usd/last/20/?format=json";
echo file_get_contents($url);

