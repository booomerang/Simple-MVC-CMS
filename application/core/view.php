<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class View
{
	public function generatePage($view,$data = array())
	{
		$app = new Application();
		$template = $app->getTemplate();
		include $template;
		//include PATH_SITE.'/templates/default_theme/index.php';
	}
}