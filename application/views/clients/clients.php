<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */
?>

<?php foreach($data as $key => $value) : ?>
	<div class="client-block">
		<a href="<?php echo Url::getBase(); ?>/clients/website/<?php echo $value['id']; ?>">
			<img src="<?php echo $value['image'] ?>">
		</a>
		<br>
		<h2>
			<a href="<?php echo Url::getBase(); ?>/clients/website/<?php echo $value['id']; ?>"><?php echo $value['title'] ?></a>
		</h2>
	</div>
<?php endforeach; ?>