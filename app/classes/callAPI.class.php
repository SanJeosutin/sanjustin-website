<?php
class API{
    static function makeRequest(){
        extract(func_get_args(), EXTR_PREFIX_ALL, "arg");
        $connection = curl_init(); 
		curl_setopt($connection, CURLOPT_URL, $arg_0); 
		curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
        if(isset($arg_2)){
            if($arg_2 == "HTTP_HEADER"){
                curl_setopt($connection, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App', $arg_1));
            }
        }
		curl_setopt($connection, CURLOPT_TIMEOUT, 20);
		$returnJSON = curl_exec($connection); 
		curl_close($connection);
		return json_decode($returnJSON); 
    }
}
?>