<?php

use Templates\Dashboard;

class RequestProcessor
{
    public  function processLandingRequest($request)
    {
        require ("landing.view.php");
    }
    public function proccesAppRequest($request)
    {
        $dashboard = new Dashboard($request);
        $dashboard->processRequest();
    }
}