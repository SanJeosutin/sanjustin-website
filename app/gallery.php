<?php
include("reusable/header.php");
include("reusable/navbar.php");

include("classes/components/renderContent.php");
include("classes/components/image.php");
include ("classes/instagramAPI.class.php");

$ig = new Instagram();

//!was here pls fix ;P

$result = $ig->getUserPost();
if (isset($_GET['RenderPage'])) {

    switch ($_GET['RenderPage']) {
        //switch ($type) {
            case 'photography':
                foreach($result as $res){
                    $caption = substr($res->caption, 0, strpos($res->caption, "#"));
                    $type = substr($res->caption, strpos($res->caption, '#') + 1);
                    
                    if($type == "photography"){
                        Image::create($caption, $res->media_url, $type, $res->timestamp, $res->permalink);
                    }
                }

                    Content::renderGalery("In here you can find some photos I took, ranging from new ones to old ones. Enjoy!", "");
                    Image::display();
                break;

            case 'coolstuff':
                foreach($result as $res){
                    $caption = substr($res->caption, 0, strpos($res->caption, "#"));
                    $type = substr($res->caption, strpos($res->caption, '#') + 1);
                    if($type == "coolstuff"){
                        Image::create($caption, $res->media_url, $type, $res->timestamp, $res->permalink);
                    }
                }
                    Content::renderGalery("In here you can find some cool stuff I did, ranging from new ones to old ones. Enjoy!", "");
                    Image::display();

                break;

            case 'designs':
                foreach($result as $res){
                    $caption = substr($res->caption, 0, strpos($res->caption, "#"));
                    $type = substr($res->caption, strpos($res->caption, '#') + 1);
                    
                    if($type == "design"){
                        Image::create($caption, $res->media_url, $type, $res->timestamp, $res->permalink);
                    }
                }
                    Content::renderGalery("In here you can find some designs I've done, ranging from new ones to old ones. Enjoy!", "");
                    Image::display();
                break;

            default:
                Content::renderGalery("Ah well well.. you've found a secret ;D. Good on ya.", "");
                break;
        }
}

include("reusable/footer.php");
?>