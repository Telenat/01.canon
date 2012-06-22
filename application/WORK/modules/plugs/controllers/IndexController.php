<?php

class Plugs_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $this->view->pagename = 'Default.Index.Главная';
        $this->view->headTitle($this->view->pagename,'PREPEND');
    	
    		 
  		$plug = new  Plugs_Model_Plug();
  		$this->view->plugs= $plug->getAllUsers();
    }
}

