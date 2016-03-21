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
		function getConnection() {
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="myTable";
			$dbname="myDatabase";
			$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbh;
		}
	}
?>
