<?php

/**
 * Cytonn Technologies
 *
 * @author: Ronnie Nyaga <rnyaga@cytonn.com>
 *
 * Project: php.app
 *
 */

include 'inc.php';
require 'Slim/Slim.php';

global $app;
$app = new Slim();

//API endpoint to get all students in by class.
//If this API is invoked, it calls  getAllStudents()
$app->get('/students/:class','getAllStudents');

//API endpoint to get a specific students by registration number.
//If this API is invoked, it calls getStudent()
$app->get('/students/:registrationNumber','getStudent');

$app->run();

function getAllStudents($class){
	$pdo = DB::getConnection();
	$resultSet = array();
	$response = array();
	try{
		$ss="SELECT * FROM students where class=?";
		$stmt = $pdo->prepare($ss);
		$stmt->execute(array($class));
		while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$resultSet[] = $row;
		}
		$response['response'] = $resultSet;
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	echo json_encode($response);
	return true;
};//getAllStudents

function getStudent($registrationNumber){
	$pdo = DB::getConnection();
	$resultSet = array();
	$response = array();
	try{
		$ss="SELECT * FROM students where registrationNumber=?";
		$stmt = $pdo->prepare($ss);
		$stmt->execute(array($registrationNumber));
		while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$resultSet[] = $row;
		}
		$response['response'] = $resultSet;
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	echo json_encode($response);
	return true;
};//getStudent


?>
