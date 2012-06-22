<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Alex_Model
{
	protected $_dbtable;
	protected $_row;
	
	public function __construct(Zend_Db_Table_Abstract $dbTable,$id)
	{
		$this->_dbtable = $dbTable;
//		$this->_row = new Zend_Db_Table_Row();
		if ($id) {
			$this->_row = $this->_dbtable->find($id)->current();
		} else {
			$this->_row = $this->_dbtable->createRow();
		}
	} 
	
        public function fill($data)
	{
		foreach ($data as $key => $value){
			if (isset($this->_row->$key)) {
				$this->_row->$key=$value;
			};
		}	
	}	
	
	public function save()
	{
		$this->_row->save();	
	}
	
	public function delete()
	{
		$this->_row->delete();	
	}
	
	public function __set($name,$val)
	{
		if (isset($this->_row->$name)) {
			$this->_row->$name=$val;
		}	
	}	
	
	public function __get($name)
	{
		if (isset($this->_row->$name)) {
			return $this->_row->$name;
		}
	}
	    
}

?>
