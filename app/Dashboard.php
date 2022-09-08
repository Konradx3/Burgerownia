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
            case "/":
                $this->showDashboard();
            break;
        }
    }
    public function showDashboard()
    {
        require ("app/views/dashboard.view.php");
    }
}