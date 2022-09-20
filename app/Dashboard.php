<?php

namespace Templates;

class Dashboard
{
    private $request;
    private $post;
    private $get;

    public function __construct($request)
    {
        $requestString = \explode("?", $request);
        $this->request = empty($requestString) ? $request : $requestString[0];
    }
    public function processRequest()
    {
        if (!$this->request)
        {
            return;
        }
        $this->post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $this->get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
        switch ($this->request)
        {
            case "/dashboard":
                $this->showDashboard();
                break;
            case "/onas":
                require ("app/views/onas.view.php");
                break;
            case "/menu":
                require ("app/views/menu.view.php");
                break;
            case "/zamowienie":
                require ("app/views/zamowienie.view.php");
                break;
            default:
                require ("landing.view.php");
        }
    }
    public function showDashboard()
    {
        require ("app/views/dashboard.view.php");
    }

}