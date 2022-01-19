<?php
require_once("../config/keys.php");

class Spotify{

    const API_URL = "https://api.spotify.com/";

    function getTopTenSongs(){
        $header = "Authorization: Bearer ".OAUTH_TOKEN;
        $url = self::API_URL."v1/me/top/tracks?limit=10&offset=5";

        return API::makeRequest($url, $header, "HTTP_HEADER");
    }
}
?>