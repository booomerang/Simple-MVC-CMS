<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class PanelController extends Controller
{
	public function __construct()
	{
		Session::init();
		$access = Session::get('access');
		if($access == false){
			Session::destroy();
			header('Location: '.Url::getBase().'/login');
			exit;
		}
		parent::__construct();
	}

	public function indexPage()
	{
		$this->view->generatePage('panel/panel.php');
	}

	public function logoutPage()
	{
		Session::destroy();
		header('Location: '.Url::getBase().'/login');
		exit;
	}
}