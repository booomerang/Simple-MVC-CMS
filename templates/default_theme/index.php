<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

/*include '../../constants.php';
include '../../libraries/application/loader.php';

loader::init();*/

$baseurl = Url::getBase();

$app = new Application();
$config = $app->getConfig();
$template = $config->template;

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Главная</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/templates/<?php echo $template; ?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/templates/<?php echo $template; ?>/css/clients.css"/>
</head>

<body>
<div id="header">
	<div id="header-container">
		<span>
			<a href="<?php echo $baseurl; ?>/index">Right CMS</a>
		</span>

		<div id="login">
			<?php if(Session::get('access') === false) : ?>
				<a href="<?php echo $baseurl; ?>/login">Авторизация</a>
			<?php else: ?>
           		<a href="<?php echo $baseurl; ?>/panel/logout">Выйти</a>
			<?php endif; ?>
		</div>

    	<div id="top-menu">
        	<ul>
        	    <li>
					<a href="<?php echo $baseurl; ?>/index">Главная</a>
				</li>
        	    <li>
                    <a href="<?php echo $baseurl; ?>/about">О компании</a>
        	    </li>
        	    <li>
                    <a href="<?php echo $baseurl; ?>/services">Услуги</a>
        	    </li>
        	    <li>
					<a href="<?php echo $baseurl; ?>/clients">Наши клиенты</a>
				</li>
        	    <li>
                    <a href="<?php echo $baseurl; ?>/contacts">Контакты</a>
        	    </li>
        	</ul>
    	</div>

    	<div class="clear"></div>
	</div>
</div>

<div id="main">
	<div class="main-container">
    	<!--<div id="left-sidebar"></div>-->
    	<div id="content">
			<?php include PATH_SITE.'/application/views/'.$view; ?>
    	</div>
    </div>
	<div class="clear"></div>
</div>

<div id="footer">
	<div id="footer-container">
		<div class="copyright">
			<span>Copyright © 2013. All rights reserved.</span>
		</div>
	</div>
</div>
</body>

</html>