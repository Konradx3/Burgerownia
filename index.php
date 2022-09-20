<?php
require ('config.php');

$processor = new RequestProcessor();
switch ($_SERVER['HTTP_HOST'])
{
    case ROOT_LANDING_URL:
        $processor->processLandingRequest($_SERVER['REQUEST_URI']);
        break;
    default:
        header("Location:https://" . ROOT_LANDING_URL);
        break;
}

