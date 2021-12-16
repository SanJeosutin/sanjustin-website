<?php
require_once("../config/keys.php");

class Instagram{

    const API_URL = "https://graph.instagram.com/";
    const API_URL_ACCESS_TOKEN = "&access_token=".ACCESS_TOKEN;


    private function makeRequest($url){
        $connection = curl_init(); 
		curl_setopt($connection, CURLOPT_URL, $url); 
		curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($connection, CURLOPT_TIMEOUT, 20);
		$returnJSON = curl_exec($connection); 
		curl_close($connection);
		return json_decode($returnJSON); 
    }

    function getUsername(){
        $url = self::API_URL."me?fields=username".self::API_URL_ACCESS_TOKEN;
        return $this->makeRequest($url)->username;
    }

    function getUserPost(){
        $url = self::API_URL."me/media?fields=id,media_type,media_url,permalink,timestamp,caption,comments_count,likes_count,children&access_token=".self::API_URL_ACCESS_TOKEN;
        return $this->makeRequest($url)->data;
    }
}
?>