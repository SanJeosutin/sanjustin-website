<?php

include("image.php");
include("classes/instagramAPI.class.php");



class Content{
    static function render($contentType, $description){
        $ig = new Instagram();
        $result = $ig->getUserPost();

        echo "
            <!--Main Content START-->
                <div>
                    <p class=\"lead\">
                    $description
                    </p>
                    <br>
                </div>
            <!--Main Content END-->
        ";

        foreach($result as $res){
            $caption = substr($res->caption, 0, strpos($res->caption, "#"));
            $type = substr($res->caption, strpos($res->caption, '#') + 1);
            if($type == $contentType){
                Image::create($caption, $res->media_url, $type, $res->timestamp, $res->permalink);
            }
        }
        Image::display();
    }
}

?>