<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class AboutController extends Controller
{
	public function indexPage()
	{
		$this->view->generatePage('about/about.php');
	}
}