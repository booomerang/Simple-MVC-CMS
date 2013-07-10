<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */
?>

<form method="post" action="login/submit">
	<table>
		<tr>
			<td>
				<span>Логин</span>
			</td>
			<td>
				<input type="text" name="login">
			</td>
		</tr>
		<tr>
			<td>
				<span>Пароль</span>
			</td>
			<td>
				<input type="password" name="password">
			</td>
		</tr>
	</table>
    <div>
        <input type="submit" name="submit" value="Авторизироваться">
    </div>
</form>