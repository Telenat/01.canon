<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initView()
    {
        date_default_timezone_set('Europe/Kiev');

        // Инициализация вида
        $view = new Zend_View();
        $view->doctype('XHTML1_STRICT');

        $view->headMeta()->appendHttpEquiv('Content-Type','text/html;charset=utf-8');

        $view->headLink ()->appendStylesheet('/css/blueprint/screen.css','screen');
        $view->headLink()->appendStylesheet('/css/blueprint/print.css','print');
        $view->headLink()->appendStylesheet('/css/blueprint/ie.css','screen','ie');
        $view->headLink()->appendStylesheet('/css/main.css','screen');

        $view->headTitle('OKNW');
        $view->headTitle()->setSeparator(' :: ');

        $GLOBALS['users_title']='OKNW';

        // Добавление вида в ViewRenderer
        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper(
            'ViewRenderer'
        );
        $viewRenderer->setView($view);

        // Его возвращение, таким образом, он может быть сохранен загрузчиком
        return $view;
    }
	
}

