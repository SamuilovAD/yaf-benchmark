<?php

class Bootstrap extends Yaf_Bootstrap_Abstract
{
    public function _initConfig()
    {
        $config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $config);
    }
    public function _initView(Yaf_Dispatcher $dispatcher)
    {
        // Disable the Yaf view engine
        $dispatcher->disableView();
    }
}
