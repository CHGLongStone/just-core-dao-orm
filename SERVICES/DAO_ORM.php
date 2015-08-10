<?php
/**
 * this file requires a  
 * 
 * 
 * 
 * @author	Jason Medland<jason.medland@gmail.com>
 * @package	JCORE\SERVICE\DAO_ORM 
 */

namespace JCORE\SERVICE\DAO_ORM;
use JCORE\DAO\DAO as DAO;



/**
 * Class DAO_ORM
 *
 * @package JCORE\SERVICE\DAO_ORM 
*/
abstract class VIEW extends DAO { 
	/**
	 * default view definition
	 * 
	 * 
	 * @access public 
	 * @var array
	 */
	public $VIEW = array();
	/***
	* DESCRIPTOR: 
	* enforce a method to parse the request in the sub class
	* @param mixed raw_data 
	* @return return NULL  
	*/
	abstract public function parseRequest($raw_data);
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
		$failedConfig = array(
				0 => array(
					'EXCEPTION' =>array(
						'ID' => 120,
						'MSG' => '$args["ORM_VIEW"]:=:['.$args["ORM_VIEW"].'] Not Defined',
					),
				);
			);
		if(isset($args["ORM_VIEW"]) && !is_array($args["ORM_VIEW"]) && 0 <= count($args["ORM_VIEW"])){
			#return $failedConfig;
		}elseif(!isset($this->VIEW["ORM_VIEW"]) && !is_array($args["ORM_VIEW"]) && 0 <= count($args["ORM_VIEW"])){
			$failedConfig[0]['EXCEPTION']['MSG'] = $failedConfig[0]['EXCEPTION']['MSG'].' in extended entity  ['.get_called_class().']';
		}
		return $failedConfig;
		
		//parent::__construct($args);
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
		echo __METHOD__.'@'.__LINE__.'$args<pre>['.var_export($args, true).']</pre>'.'<br>'.PHP_EOL; 
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
	
}



?>