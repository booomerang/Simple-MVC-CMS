<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class Session
{
	public static function init()
	{
		session_start();
	}

	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public static function get($key)
	{
		if(isset($_SESSION[$key])){
			return $_SESSION[$key];
		}
		return false;
	}

	public static function destroy()
	{
		session_destroy();
	}
}