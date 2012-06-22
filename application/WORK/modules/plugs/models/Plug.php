<?php

class Plugs_Models_Plug extends Alex_Model
{
	public function __construct($id=null)
	{
		$nnn = new Plugs_Model_DbTable_Plugs();
		parent::__construct($nnn , $id);
	}
}