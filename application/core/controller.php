<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class Controller
{
	public $model = null;
	public $view = null;

	public function __construct()
	{
		$this->view = new View();
		//$this->model = getModel();
	}

	public function indexPage()	{}

	public function getModel($model_file)
	{
		$model_path = PATH_SITE.'/application/models/'.$model_file;
		if(file_exists($model_path)){
			include $model_path;

			//Необходимо отделить '.php' от имени Модели
			$pos = strpos($model_file,'.php');
			$model_name = substr($model_file, 0, $pos);

			//Получаем название модели - exampleModel
			$model_name = $model_name . 'Model';

			$this->model = new $model_name();
		}
	}
}