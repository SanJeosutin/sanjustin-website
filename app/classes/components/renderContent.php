<?php

include("card.php");
include("image.php");
include("classes/dataReader.class.php");
include("classes/githubAPI.class.php");
include("classes/instagramAPI.class.php");


/*
 * Arguments    : Description           | Example
 * -----------------------------------------------
 * 1st arg      : type data to render   | "PROJECTS" or "GALLERIES"
 * 2nd arg      : array 
 */
class Content{
    static function render(){
        extract(func_get_args(), EXTR_PREFIX_ALL, "arg");

        if(isset($arg_1)){
            $contentType = $arg_1[0];
            $description = $arg_1[1];

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
        }

        $dr = new DataReader();

        switch ($arg_0) {
            case 'HOME':
                $git = new Github();
                $res = $git->getUserInfo();
                echo "
                <!--Main Content START-->
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <img src=\"$res->avatar_url\" class=\"img-thumbnail rounded mx-auto d-block\" alt=\"$res->login\">
                        </div>
                        <div class=\"col-md-8\">
                        ";
                echo $dr->readRawData("../data/Bio.txt")
                        ."
                        </div>
                    </div>
                <!--Main Content END-->
                ";
                break;

            case 'PROJECTS':
                $git = new Github();
                $result = $git->getUserRepo();
                
                foreach($result as $res){
                    if(strpos($res->description, "{$contentType}")){
                        $res->description = str_replace('{'.$contentType.'}', "", $res->description);
                        Card::create($res->name, $res->description, $res->homepage, $res->html_url);
                    }
                }

                Card::display();
                break;
            
            case "AMBITIONS":
                echo $dr->readRawData("../data/2022 Goal.txt");
                break;

            case 'GALLERIES':
                $ig = new Instagram();
                $result = $ig->getUserPost();
                
                foreach($result as $res){
                    $caption = substr($res->caption, 0, strpos($res->caption, "#"));
                    $type = substr($res->caption, strpos($res->caption, '#') + 1);
                    if($type == $contentType){
                        Image::create($caption, $res->media_url, $type, $res->timestamp, $res->permalink);
                    }
                }
                
                Image::display();
                break;
        }

    }
}

?>