<?php

//URL
define("ROOT_LANDING_URL", "localhost");

foreach (glob("app/*.php") as $filename)
{
    include $filename;
}
require ("RequestProcessor.php");