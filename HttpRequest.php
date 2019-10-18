<?php
function HTTP_REQUEST($API, $JSON) {
    $ch = curl_init($API);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($JSON));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER,
    [
      'Content-Type: application/json',
      'Content-Length: ' . strlen(json_encode($JSON))
    ]);
    $RES = curl_exec($ch);
    $HTTP_CODE = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return json_decode($RES, true);
}
