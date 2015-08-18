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
class VIEW extends DAO { 
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
		/**
		* figure out where this was from and fix the error object
		$failedConfig = array(

				'EXCEPTION' =>array(
				'ID' => 120,
				'MSG' => '$args["ORM_VIEW"]:=:['.$args["ORM_VIEW"].'] Not Defined',


				),
			);
		*/
		$failedConfig = array(
			'result' => null,
			'error' => array(
				'Code' => 100,
				'Message' => '$args["ORM_VIEW"]:=:['.$args["ORM_VIEW"].'] Not Defined',
				'Data' => 'extended entity  ['.get_called_class().']',
			),
			'id' => null,
		
		);
		if(!isset($args["ORM_VIEW"])){
			return $failedConfig;
		}
		/*
		if(
			(!isset($args["ORM_VIEW"]) )
			||
			(
				isset($args["ORM_VIEW"]) 
				&& 
				(!is_array($args["ORM_VIEW"]) && 0 == count($args["ORM_VIEW"]))
			)
		){
			return $failedConfig;
		}elseif(!isset($this->VIEW["ORM_VIEW"]) ){//&& !is_array($args["ORM_VIEW"]) && 0 <= count($args["ORM_VIEW"])
			$failedConfig[0]['EXCEPTION']['MSG'] = $failedConfig[0]['EXCEPTION']['MSG'].' in extended entity  ['.get_called_class().']';
			return $failedConfig;
		}


		*/
		$this->VIEW = $GLOBALS['CONFIG_MANAGER']->getSetting($LOAD_ID = 'ORM_VIEW',$args["ORM_VIEW"]);
		echo __METHOD__.'@'.__LINE__.'$this->VIEW<pre>['.var_export($this->VIEW, true).']</pre>'.'<br>'.PHP_EOL; 
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