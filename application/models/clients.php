<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

class ClientsModel extends Model
{
	public function getIndexData()
	{
		$this->db->exec("set NAMES utf8");
		$sth = $this->db->query('SELECT id, title, image, url FROM clients');
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

		/*echo '<pre>';
			print_r($result);
		echo '</pre>';*/

		return $result;
	}

	public function getWebsiteData($id)
	{
		$this->db->exec("set NAMES utf8");
		$sth = $this->db->prepare('SELECT * FROM clients WHERE id = :id');
		$sth->execute(array(':id' => $id));
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}
}
