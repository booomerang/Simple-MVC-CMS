<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class Router
{
	/**
	 * Получаем имя контроллера и имя его метода
	 * через URL вида: example.ru/contacts/feedback
	 */
	public static function start()
	{
		$controller_name = 'Index';
		$page_name = 'index';
		$model_name = $controller_name;
		$link_parts = array();

		$link_parts = explode('/',$_SERVER['REQUEST_URI']);

		if(!empty($link_parts[2])){
			$controller_name = $link_parts[2];
			$model_name = $link_parts[2];
		}

		if(!empty($link_parts[3])){
			$page_name = $link_parts[3];
		}

		if(!empty($link_parts[4])){
			$param = $link_parts[4];
		}

		$model_file = strtolower($model_name).'.php';
		$model_name = $model_name . 'Model';

		$controller_file = strtolower($controller_name).'.php';
		$controller_name = $controller_name . 'Controller';

		$page_name = $page_name . 'Page';

		/*$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include $model_path;
		}*/

		//echo $controller_file;
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include $controller_path;
		}
		else
		{
			$view = new View();
			$view->generatePage('error/404.php');
			exit;
		}

		$controller = new $controller_name();
		$controller->getModel($model_file);

		if(method_exists($controller,$page_name))
		{
			if(isset($param)){
				$controller->$page_name($param);
			}
			else{
				$controller->$page_name();
			}
		} else
		{
			$view = new View();
			$view->generatePage('error/404.php');
			exit;
		}
	}
}