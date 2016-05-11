<?php
/**
 * 
 * @author	Jason Medland<jason.medland@gmail.com>
 * @package	JCORE\SERVICE\DAO
 */


namespace JCORE\SERVICE\DAO\ORM;
use JCORE\DAO\DAO as DAO;

/**
 * Class DAO_ORM
 *
 * @package JCORE\SERVICE\DAO\ORM
*/
class DAO_ORM extends DAO { 
	
	
	/**
	 * default view definition
	 * 
	 * 
	 * @access public 
	 * @var array
	 */
	public $VIEW = array();


	





	/**
	* DESCRIPTOR: 
	* first we check the definition has been set
	* if there's no definition we can't use this type of object 
	* 
	* 
	* @param param 
	* @return return  
	*/
	public function __construct($args = null){
		#echo __METHOD__.'@'.__LINE__.'  '.'<br>'; 
		parent::__construct($args);

		return;
	}
	/**
	* DESCRIPTOR: 
	* 
	* @param param 
	* @return return  
	*/
	public function init($args){
		#

		return parent::__construct($args);
	}
	/**
	* DESCRIPTOR: an example namespace call 
	* @param param 
	* @return return  
	public function initializeFromSchema($DSN, $tableName, $set_fk){
		echo __METHOD__.'@'.__LINE__.' '.'<br>'.PHP_EOL; 
		parent::initializeFromSchema($DSN, $tableName, $set_fk);
	}
	*/
	
	
	/**
	* DESCRIPTOR: STORES CHANGES TO THE DAO TO THE DB(s)
	* @param	string 	table
	* @return outputErrors 
	*/
	public function save($table=null){
		return parent::save($table);
		
	}
	/*******************************************************************/
	/** port out to main repo */
	/*******************************************************************/
	/**
	* DESCRIPTOR: 
	* 
	* @param args 
	* @return return  
	*/
	public function parseJSONColumns($args = null){
		if(1 >= count($args["result"])){
			return false;
		}
		if(!isset($this->JSONColumns) || 0 == count($this->JSONColumns)){
			return $args["result"];
		}
		
		foreach($result AS $key => $value){
			if(isset($this->JSONColumns[$key])){
				$result[$key] = json_decode($value);
			}
		}
		return $result;
	}
	/**
	* DESCRIPTOR: 
	* 
	* @param args 
	*		'result' => $result,
	*		'ACL_TREE' = $ACL_TREE,
	* @return return  
	*/
	public function getJSONColumnValue($args = null){
		if(!isset($args["columnName"]) || '' != $args["columnName"]){
			return false;
		}
		if(0 == count($args["result"])){
			return false;
		}
		
		return json_decode($args["row"][$args["columnName"]]);
	}
	/*******************************************************************/
}



?>