<?php
/**
 * ORM2
 * @author	Jason Medland<jason.medland@gmail.com>
 * @package	JCORE\SERVICE\DAO
 */

 

namespace JCORE\SERVICE\DAO;
use JCORE\DAO\DAO as DAO;

/**
 * Class ORM2
 *
 * @package JCORE\SERVICE\DAO
*/
class ORM2{// extends DAO { 
	/**
	* DESCRIPTOR: 
	* 
	* @param array args 
	* @return null  
	*/
	public function __construct($args =null){
		parent::__construct($args);
		return;
	}
	/**
	* DESCRIPTOR: 
	* 
	* @param array args 
	* @return null  
	*/
	public function init($args){
		#		echo __METHOD__.'@'.__LINE__.'$args<pre>['.var_export($args, true).']</pre>'.'<br>'.PHP_EOL; 
		return parent::__construct($args);
	}
}


?>