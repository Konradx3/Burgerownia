<?php

use Templates\Dashboard;

class RequestProcessor
{
    public  function processLandingRequest($request)
    {
        $dashboard = new Dashboard($request);
        $dashboard->processRequest();
    }
}