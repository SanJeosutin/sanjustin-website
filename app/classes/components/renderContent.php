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
                                <p class=\"lead\">
                                    Hi there 👋, I'm Justin (or known as $res->login). 
                                </p>
                                <p>
                                &nbsp;&nbsp;&nbsp;&nbsp;I created this website to showcase my work that I've been doing during my time at uni. 
                                I have passion for web development, photography, musics, games and currently studying $res->bio at $res->company.
                                Belive it or not I almost finished my degree with only one year left to go! Currently I'm working on a e-commerce website that 
                                uses the Laravel framework. I'm currently based in $res->location. You can reach me either via 
                                <a href=\"mailto:$res->email\"> email </a> or on my social media accounts. Thank you for checking my stuff out!
                                </p>
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
                        Card::create($res->name, $res->description, $res->html_url, $res->html_url);
                    }
                }

                Card::display();
                break;
            
            case "AMBITIONS":
                $dr = new DataReader();
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