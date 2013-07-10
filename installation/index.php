<?php
/**
 * Created by Boomerang
 * Project: CMS(Site)
 * Date: 05 Month 2013 Year
 * Site created on PHP,MySQL
 */

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Установка Boom CMS</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="install.css"/>
</head>

<body>
<div id="form-mid">
	<p id="header">Введите данные для соединения с Базой Данных</p>
	<form action="" method="post">
		<table>
			<tr>
				<td>
					<span>Сервер Базы</span>
				</td>
                <td>
                   <input type="text" name="dbserver">
                </td>
			</tr>
			<tr>
				<td>
					<span>Имя Базы Данных</span>
				</td>
                <td>
                    <input type="text" name="dbname">
                </td>
			</tr>
			<tr>
                <td>
                    <span>Имя Пользователя БД</span>
                </td>
				<td>
					<input type="text" name="dbuser">
				</td>
			</tr>
			<tr>
				<td>
					<span>Пароль</span>
				</td>
				<td>
					<input type="password" name="dbpassword">
				</td>
			</tr>
		</table>

		<div id="button">
			<button type="submit" name="submit">
				<span>Далее</span>
			</button>
		</div>
	</form>
</div>

</body>
</html>