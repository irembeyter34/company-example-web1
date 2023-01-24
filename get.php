<?php
//router
if (!$_GET["page"])
{
    include 'pages/home.php';
}
 else {
    switch ($_GET["page"]) {
        case 'about':
            include 'pages/about.php';
            break;


            case 'contact':
                include 'pages/about.php';
                break;


        default:
        include 'pages/contact.php';
            break;
    }
}
?>