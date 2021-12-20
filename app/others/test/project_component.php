<?php
    include("../../reusable/header.php"); 
    include("../../reusable/navbar.php");
    include_once("../../classes/components/image.php");

    include_once("../../classes/githubAPI.class.php");

    $github = new Github();

    echo "<h4>Project Component Test</h4>";
    
    $result = $github->getUserRepo();
    
    //var_dump($result);
    
    foreach($result as $res){
        Card::create($res->name, $res->description, $res->html_url, $res->html_url);
    }
    Card::display();
    
    echo "<br><br><br><br><br><br>";

    include("../../reusable/footer.php");
?>