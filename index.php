<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 04 Month 2013 Year
 * Site created on PHP,MySQL
 */

/*if(is_dir('installation'))
	header("Location: ". PATH_SITE . "/installation/index.php");
	exit;*/
include 'constants.php';
include 'libraries/loader/loader.php';
include 'libraries/session/session.php';

loader::init();

require_once 'application/core/model.php';
require_once 'application/core/view.php';
require_once 'application/core/controller.php';

require_once 'application/router.php';

Router::start();
?>