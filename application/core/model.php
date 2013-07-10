<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class Model
{
	public $db;

	public function __construct()
	{
		$this->db = Database::getConnection();
	}

	public function getData(){}
}