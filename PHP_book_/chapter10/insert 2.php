<?
	$conn = mysql_connect("mysql", "sunny", "dlatmdals");
	mysql_select_db("...test", $conn);
	

	$query = "INSERT INTO guestbook (name, pass, content) ";
	$query .= " VALUES ('$_POST[name]', '$_POST[pass]', '$_POST[content]')";
	$result = mysql_query($query, $conn);
?>

<script>
alert("save ok");
location.href="list.php";
</script>