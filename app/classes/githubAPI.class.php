<?php
require("callAPI.class.php");
require_once("../config/keys.php");

class Github{

    const API_URL = "https://api.github.com/";

    function getUserRepo(){
        $header = "Authorization: token ".CLIENT_TOKEN;
        $url = self::API_URL."users/SanJeosutin/repos";

        return API::makeRequest($url, $header, "HTTP_HEADER");
    }

    function getUserInfo(){
        $header = "Authorization: token ".CLIENT_TOKEN;
        $url = self::API_URL."users/SanJeosutin";

        return API::makeRequest($url, $header, "HTTP_HEADER");
    }
}
?>