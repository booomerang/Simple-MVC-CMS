<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

?>
<span>ЭТО ФАЙЛ ШАБЛОНА!</span><br>
<?php echo dirname(__FILE__); ?><br>
<!--<?php include '../../constants.php';?>-->
<?php echo PATH_SITE; ?><br>
<?php echo $_SERVER['HTTP_HOST']; ?><br>
<?php echo $_SERVER['SERVER_NAME']; ?><br>
<?php echo $_SERVER['DOCUMENT_ROOT']; ?><br>
<?php echo $_SERVER['SCRIPT_FILENAME']; ?><br>
<?php echo $_SERVER['PHP_SELF']; ?><br>
<?php echo $_SERVER['SCRIPT_NAME']; ?><br>
<?php echo $_SERVER['REQUEST_URI']; ?><br>
<?php echo $baseurl.'/templates/'.$template.'/css/main.css'?><br>
<br>
<br>