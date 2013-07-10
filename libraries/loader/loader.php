<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class Loader
{
	public static function load($class)
	{
		$class = strtolower($class);

		$file_name = PATH_SITE.'/libraries/'.$class.'/'.$class.'.php';
		//if(file_exists($file_name))
			include_once $file_name;
	}

	public static function init()
	{
		spl_autoload_register(array('Loader','load'));
	}
}