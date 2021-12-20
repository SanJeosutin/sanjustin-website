<?php
include("reusable/header.php");
include("reusable/navbar.php");

include_once("../config/easterEgg.php");
include("classes/components/renderContent.php");

if (isset($_GET['RenderPage'])) {

    switch ($_GET['RenderPage']) {
            case 'pastproject':
                Content::render("PROJECTS", array("pastproject", "In here you can find some photos I took, ranging from new ones to old ones. Enjoy!"));
                break;

            case 'currentproject':
                Content::render("PROJECTS", array("currentproject", "In here you can find some cool stuff I did, ranging from new ones to old ones. Enjoy!"));
                break;
            case 'unfinishedproject':
                Content::render("PROJECTS", array("unfinishedproject", "In here you can find some designs I've done, ranging from new ones to old ones. Enjoy!"));
                break;

            default:
                Content::render("PROJECTS", array("secret", "Ah well well.. you've found a secret ;D. Good on ya."));
                echo E_EGG_1;
                break;
        }
}

include("reusable/footer.php");
?>