<?php
class TelegramClient{
	private $key;

	public function __construct($key){
		$this->key=$key;
	}
	public function sendMessage($data){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.telegram.org/{$this->key}/sendMessage",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: application/json"
		  ),
		  CURLOPT_POSTFIELDS =>json_encode($data),
		  CURLOPT_POST => 1
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);var_dump($err);
		curl_close($curl);
		return $response;
	}

}
?>