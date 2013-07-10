<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class Application
{
	public $config = '';

	public function getTemplate()
	{
		$this->config = $this->getConfig();

		if(is_dir(PATH_SITE.'/templates/'.$this->config->template))
		{
			$template =  PATH_SITE.'/templates/'.$this->config->template.'/index.php';
			return $template;
		}
		return false;
	}

	public function getConfig()
	{
		include_once PATH_SITE . '/configuration.php';
		return new GlobalConfig();
	}

}
//$obj = new Application();
//$obj->getTemplate();