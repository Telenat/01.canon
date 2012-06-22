<?php

class Models_Plug extends Alex_Model
{
	public function __construct($id=null)
	{
		parent::__construct(new Model_DbTable_Plugs(), $id);
	}
}