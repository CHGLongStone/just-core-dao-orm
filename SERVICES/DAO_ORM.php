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
	public function parseJSONColumns($result = null){
		
		#echo __METHOD__.'@'.__LINE__.' '.'result count['.count($result).'] <pre>['.var_export($this->JSONColumns, true).']</pre> <br>'.PHP_EOL; 
		if(1 >= count($result)){
			#echo __METHOD__.'@'.__LINE__.'FAIL  '.'args<pre>['.var_export(array_keys($args), true).']</pre> <br>'.PHP_EOL; 
			return false;
		}
		#	echo __METHOD__.'@'.__LINE__.' '.'  <br>'.PHP_EOL; 
		if(!isset($this->JSONColumns) || 0 == count($this->JSONColumns)){
			#echo __METHOD__.'@'.__LINE__.' '.'  <br>'.PHP_EOL; 
			return $result;
		}
		
		#echo __METHOD__.'@'.__LINE__.' '.'  <br>'.PHP_EOL; 
		#$result = array();
		foreach($result AS $key => $value){
			#echo __METHOD__.'@'.__LINE__.' $key ['.$key.']'.'   <pre>['.var_export(count($value), true).']</pre> '.'  <br>'.PHP_EOL; 
			foreach($value AS $key2 => $value2){
				#echo __METHOD__.'@'.__LINE__.' $key2 ['.$key2.']'.'   <pre>['.var_export(count($value2), true).']</pre> '.'  <br>'.PHP_EOL; 
				if(in_array($key2, $this->JSONColumns)){
					#echo __METHOD__.'@'.__LINE__.' ###############$key2 ['.$key2.']'.'   <pre>['.var_export(json_decode($value2, true), true).']</pre> '.'  #################<br>'.PHP_EOL; 
					$tmpVal = json_decode($value2, true);
					$result[$key][$key2] = $tmpVal[$key2];
				}
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