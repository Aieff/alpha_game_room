<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://epic-store-games.p.rapidapi.com/onSale?searchWords=Mount&categories=All&locale=us&country=us",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: epic-store-games.p.rapidapi.com",
        "X-RapidAPI-Key: 29ee12e02fmsh5e4ab4f6bebe824p18a3b8jsn3f8725e377c8"
    ],
]);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}


