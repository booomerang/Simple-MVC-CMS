<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class ServicesController extends Controller
{
	public function indexPage()
	{
		$this->view->generatePage('services/services.php');
	}
}