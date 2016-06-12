<?php


$botToken = "130658747:AAE2SNKWXYyMlFIY2Zm8BwKbND6LtiGug0w";
$website = "https;//api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=hola");

?>
