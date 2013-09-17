<?php

/*
Class name: Ziron
Purpose: Interfaces to Ziron API v1 (https://api.ziron.net/v1)

*/

Class Ziron {
		
	function __construct($z_sid,$z_authkey,$z_baseurl = "https://api.ziron.net/v1") {
		
		$this->z_sid = $z_sid;
		$this->z_authkey = $z_authkey;
		$this->baseurl = $z_baseurl;
	}
	
	private function sendRequest($resource,$parameters,$method) {
		
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$this->baseurl."/Accounts/".$this->z_sid.$resource);
		curl_setopt($ch,CURLOPT_USERPWD,$this->z_sid.":".$this->z_authkey);
		curl_setopt($ch,CURLOPT_HTTPAUTH,CURLAUTH_BASIC);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CUSTOMREQUEST,$method);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$parameters);
		$result = curl_exec($ch);
		$status =  curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		return array('status' => $status,'res' => json_decode($result,true));
		
	}

	public function account_retrieve() {
		
		return $this->sendRequest('','','GET');

	}
	
}

?>