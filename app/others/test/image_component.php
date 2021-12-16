<?php
    include("../../reusable/header.php"); 
    include("../../reusable/navbar.php");
    include_once("../../classes/components/image.php");

    include_once("../../classes/instagramAPI.class.php");

    $ig = new Instagram();

    echo "<h4>Image Component Test</h4>";

    $result = $ig->getUserPost();

    //var_dump($result);
    
    foreach ($result as $res) {
        //?           GET CAPTION WITHOUT HASHTAGS                          GET IMAGE URL       GET TYPE                                            GET DATE CREATED   GET PERMALINK
        Image::create(substr($res->caption, 0, strpos($res->caption, "#")), $res->media_url, substr($res->caption, strpos($res->caption, '#') + 1), $res->timestamp, $res->permalink);
    }
    Image::display();
    
    echo "<br><br><br><br><br><br>";

    include("../../reusable/footer.php");
?>