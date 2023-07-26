<?php

class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $response = [
            'message' => 'Hello, World!'
        ];
        $this->getResponse()->setHeader('Content-Type', 'application/json');
        $this->getResponse()->setBody(json_encode($response));
    }
}