<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include "vendor/autoload.php";
require "libraries/Telegram.php";
include "config.php";

$envData=$envData["dev"];//set env [dev|pro]

//if messsage file not found, then exit
$message=@file_get_contents($argv[1]);
if(!$message){
    echo "Message file not found.".PHP_EOL;
    exit;
}
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