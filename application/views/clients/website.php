<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

?>

<div class="website-block">
	<?php foreach($data as $key => $value) : ?>
		<h1 class="website-title">
			<?php echo $value['title']; ?>
		</h1>
		<div class="website-descr">
            <p><b>Описание:</b></p>
			<p><?php echo $value['description'] ?></p>
		</div>
		<img class="website-image" src="<?php echo $value['image'] ?>">
			<div class="clear"></div>

		<br>
		<br>
		<br>

		<p class="website-cr-date">
			Дата создания сайта:
			<?php echo $value['created'] ?>
		</p>
		<p class="website-md-date">
            Дата обновления сайта:
			<?php echo $value['modified'] ?>
		</p>
			<div class="clear"></div>

    	<br>
		<p class="website-url">
			<span>Сайт:</span>
			<a href="http://<?php echo $value['url'] ?>"><?php echo $value['url'] ?></a>
		</p>
	<?php endforeach; ?>
</div>