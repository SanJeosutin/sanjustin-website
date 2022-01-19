<?php
include("reusable/header.php");
include("reusable/navbar.php");

include_once("../config/easterEgg.php");
include("classes/components/renderContent.php");

if (isset($_GET['RenderPage'])) {

    switch ($_GET['RenderPage']) {
            case 'pastproject':
                Content::render("PROJECTS", array("pastproject", "Some of my past projects, wether it be a uni assignments or my own projects."));
                break;

            case 'currentproject':
                Content::render("PROJECTS", array("currentproject", "My current project that, well... I'm currently working on."));
                break;
            case 'unfinishedproject':
                Content::render("PROJECTS", array("unfinishedproject", "Old / unfinished projects that I've lost intrest in. (<em>There will be more of these in the coming future</em>😭)"));
                break;

            default:
                Content::render("PROJECTS", array("secret", "Ah well well.. you've found a secret ;D. Good on ya."));
                echo E_EGG_1;
                break;
        }
}

include("reusable/footer.php");
?>