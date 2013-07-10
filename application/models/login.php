<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class LoginModel extends Model
{
	public function submit()
	{
		//$db = Database::getConnection();
		$sth = $this->db->prepare("SELECT id FROM users WHERE
					login = :login AND password = MD5(:password)
					LIMIT 1");
		$sth->execute(array(
			':login' => $_POST['login'],
			':password' => $_POST['password'],
		));

		$count = $sth->rowCount();
		if($count>0){
			//Login
			Session::init();
			Session::set('access', true);
			header('Location: ../panel');
		}
		else{
			//Error
			Session::destroy();
			header('Location: ../login');
			exit;
		}
	}
}