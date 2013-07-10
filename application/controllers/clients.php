<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class ClientsController extends Controller
{
	public function indexPage()
	{
		$data = $this->model->getIndexData();
		$this->view->generatePage('clients/clients.php',$data);
	}

	public function websitePage($id)
	{
		/*$id = intval($id);
		if(!is_int($id))
		{
			$this->view->generatePage('error/404.php');
			exit;
		}*/
		$data = $this->model->getWebsiteData($id);
		$this->view->generatePage('clients/website.php',$data);
	}
}