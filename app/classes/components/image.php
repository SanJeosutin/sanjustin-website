<?php
    class Image{
        private static $details = array();

        static function create($caption, $imageURL, $type, $dateCreated, $permaURL){
            array_push(self::$details, $caption);
            array_push(self::$details, $imageURL);
            array_push(self::$details, $type);
            array_push(self::$details, $dateCreated);
            array_push(self::$details, $permaURL);
        }

        static function display(){
            echo "<div class=\"row\" style=\"margin-left: 25px\">";
            for($i = 0; $i < sizeof(self::$details); $i+=5){
                echo "
                <!--galery START-->
                    <div class=\"px-4 py-4\">
                        <div class=\"card h-100 picture-gallery\" style=\"width: 18rem;\">
                            <a href=\"".self::$details[$i+4]."\" target=\"_blank\">
                                <img src=\"".self::$details[$i+1]."\" class=\"card-img-top\" alt=\"".self::$details[$i]."\">
                            </a>
                            <div class=\"picture-info\" style=\"width: 96%;\">
                                <p class=\"card-header text-center bg-light\"><strong>".self::$details[$i]."</strong></p>
                                <p class=\"card-subtitle mb-2 text-muted text-center bg-light\">Posted on ".date( "d M  Y", strtotime(self::$details[$i+3]))."</p>
                            </div>
                        </div>
                    </div>
                <!--galery END--> 
                ";
                /*
                echo "
                Caption:".self::$details[$i]."<br>".
                "Path:".self::$details[$i+1]."<br>".
                "Type:".self::$details[$i+2]."<br>"."
                Date:".self::$details[$i+3]."<br>"."
                PermaURL:".self::$details[$i+4]."<br>"."
                ";
                */
            }
            echo "</div>";
        }
    }
?>