<?php
require_once("../config/keys.php");

class Instagram{

    const API_URL = "https://graph.instagram.com/";
    const API_URL_ACCESS_TOKEN = "&access_token=".ACCESS_TOKEN;

    function getUsername(){
        $url = self::API_URL."me?fields=username".self::API_URL_ACCESS_TOKEN;
        return API::makeRequest($url)->username;
    }

    function getUserPost(){
        $url = self::API_URL."me/media?fields=id,media_type,media_url,permalink,timestamp,caption,comments_count,likes_count,children&access_token=".self::API_URL_ACCESS_TOKEN;
        return API::makeRequest($url)->data;
    }
}
?>