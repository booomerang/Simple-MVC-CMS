<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class LoginController extends Controller
{
	public function indexPage()
	{
		//TODO: не редиректить на login, если авторизирован
		$this->view->generatePage('login/login.php');
	}

	public function submitPage()
	{
		$this->model->submit();
	}
}