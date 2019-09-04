<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require "Telegram.php";
include "config.php";
include "vendor/autoload.php";
//set env
$envData=$envData["dev"];

$message = "";
/*
Send message
 */
$telegramClient = new TelegramClient($envData["telegram"]["botID"]);
$response = $telegramClient->sendMessage(array(
	"text" => $message,
	"parse_mode" => "markdown",
	"chat_id" => $envData["chat_id"],
));

?>