<?php

    /**
     * Cytonn Technologies
     *
     * @author: Ronnie Nyaga <rnyaga@cytonn.com>
     *
     * Project: php.app
     *
     */


    /**
    * inc.php defines a class called DB
    */
    require_once("inc.php");
    class DatabaseConnection{
    	private $_handle = null;
      private function __construct(){
        $dsn = 'mysql://root:password@localhost/mydb';
    		$this->_handle =& DB::connect( $dsn, array() );
      }
      public static function get(){
       	static $db = null;
    		if ( $db == null ){
    			$db = new DatabaseConnection();
    		}
    		return $db;
      }
      public function handle(){
    		return $this->_handle;
      }
    }
?>
