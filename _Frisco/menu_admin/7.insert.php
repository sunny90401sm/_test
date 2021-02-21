
<?
	//데이터 베이스 연결하기
	include '../includes/0.db_info.inc';

	// localhost가 아니라 야후는 mysql


$query = "INSERT INTO notice (id, title, price, on_off, takeout, content) VALUES ('', '$_POST[title]', '$_POST[price]', '$_POST[on_off]', '$_POST[takeout]', '$_POST[content]')";
	

$result=mysql_query($query, $conn);


	//데이터베이스와의 연결 종료
	mysql_close($conn);

	// 새 글 쓰기인 경우 리스트로..
	echo ("<meta http-equiv='Refresh' content='1 URL=1.list_notice.php'>");
	
?>
<center>
<font size=2>save ok</font>