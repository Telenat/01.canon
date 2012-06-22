<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->pagename = 'Default.Index.Главная';
        $this->view->headTitle($this->view->pagename,'PREPEND');
    }


}


