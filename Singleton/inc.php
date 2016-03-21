<?php

/**
 * Cytonn Technologies
 *
 * @author: Ronnie Nyaga <rnyaga@cytonn.com>
 *
 * Project: php.app
 *
 */

class DB{
  public function __construct(){}

/**
*
 * @dsn: This is the connection database string. It contains the connector database to be connected to.
 * @credentials: This is an array containing the username and the password
 *
 */
  public function connect($dsn, $credentials){
    $username = $credentials[0];
    $password = $credentials[1];
    $conn = NULL;
    try {
      $conn = new PDO($dsn, $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
  }
}

?>
