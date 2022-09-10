<?php

//URL
define("ROOT_LANDING_URL", "localhost");
define("ROOT_APP_URL", "burgerownia.localhost");

foreach (glob("app/*.php") as $filename)
{
    include $filename;
}
require ("RequestProcessor.php");