<?php

class Plugs_Form_Plug extends Zend_Form
{
    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
    	$this->setName('form_plug');
    	//parent::__construct();
    	
    	$modname=new Zend_Form_Element_Text('modname');
    	$modname->setLabel('Имя модуля');
    	
    	$modpath=new Zend_Form_Element_Password('modpath');
    	$modpath->setLabel('Путь для модуля');
    	
    	$submit=new Zend_Form_Element_Submit('submit');
    	$submit->setLabel('OK');
    	
    	$this->addElements(array($modname, $modpath, $submit));
    	
    	 
    }


}

