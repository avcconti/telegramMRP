<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require "Telegram.php";
include "config.php";
include "vendor/autoload.php";

$envData=$envData["dev"];//set env

//if messsage file not found, then exit
if(count($argv)<2){
    echo "No file found".PHP_EOL;
    exit;
}
$message = file_get_contents($argv[1]);
/*
Send message
 */
$telegramClient = new TelegramClient($envData["telegram"]["botID"]);
$response = $telegramClient->sendMessage(array(
	"text" => $message,
	"parse_mode" => "markdown",
	"chat_id" => $envData["chat_id"],
));
$jsonResponse=json_decode($response);
if(isset($jsonResponse->ok) && $jsonResponse->ok){
    echo "Message sent succesfully".PHP_EOL;
}else{
    echo $jsonResponse->description.PHP_EOL;
}
?>