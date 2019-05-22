<?php
require_once("MobileRestHanler.php");

$view = "";

if(isset($_GET["view"]))
{
    $view = $_GET['view'];

// Controls the RESTful Services URL mapping
    switch($view)
    { 
        case "all":
        // to handle REST URL /mobile/list/
        $mobileResHandler = new MobileRestHandler();
        $mobileResHandler->getAllMobiles();
        break;

        case "":
        // 404 Not Found
        break;
    }

}
?>