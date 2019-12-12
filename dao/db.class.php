<?php

class DB{
	/**
	 * database connectivity parameters
	 * @var string
	 */
	public static $host="localhost"; //database host
	public static $user="root"; //database user
	public static $pwd=""; //database password
	public static $bd="symago"; //database name
	
	/**
	 * open connection to Database
	 * @return PDO
	 */
	public static function connectionDB(){
		$strConnection = 'mysql:host='.self::$host.';dbname='.self::$bd.'';
		$arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$pdo = new PDO($strConnection, self::$user,self::$pwd, $arrExtraParam);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}
