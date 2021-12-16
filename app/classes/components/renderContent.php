<?php
class Content{
    static function render(){

    }

    static function renderGalery($description, $content){
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
    
    static function renderProject(){
        echo "
        
        ";
    }
    
    /* 
    static function renderLatest($date){
        echo "
        <div class=\"card mw-100\">
        <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
        </div>
        <div class=\"card-footer text-muted\">
        $date
        </div>
        </div>
        <br>
        ";
    }
    */
}

?>