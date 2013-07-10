<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class Url
{
	public static $baseurl = '';

	/**
	 * Метод получения базового урл сайта
	 * Пример: из 'localhost/test-site' -> '/test-site'
	 * @return string
	 */
	public static function getBase()
	{
		$path = PATH_SITE;
		//нахожу в строке название сайта
		$pos = strrpos($path,DIRECTORY_SEPARATOR);
		//извлекаю название
		self::$baseurl = substr($path,(int) $pos+1);

		return '/'.self::$baseurl;
	}
}