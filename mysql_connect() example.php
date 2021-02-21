
<?php
	// localhost가 아니라 야후는 mysql
$link = mysql_connect('mysql', 'sunny', 'dlatmdals');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>