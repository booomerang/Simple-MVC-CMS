<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 04 Month 2013 Year
 * Site created on PHP,MySQL
 */

class Database
{
	/*private $connection;
	private static  $instance;

	public static function getDbo()
	{
		if(!self::$instance){
			self::$instance = new self();
		}
	return self::$instance;
	}*/

	/**
	 * Constructor
	 * Anti Object
	 */
	private function __construct() {}

	private function __clone() {}

	/**
	 * Function for connection to DB using
	 * data from configuration file
	 * @return PDO object
	 */
	public static function getConnection()
	{
		//TODO: normal path to config file
		require_once(PATH_SITE.'/configuration.php');

		$config = new GlobalConfig();

		//mysql:host=localhost;dbname=nameofdb
		$dsn = $config->dbtype.':host='.$config->dbserver.';dbname='.$config->dbname;
		return new PDO($dsn,$config->dbuser,$config->dbpassword);
	}
}