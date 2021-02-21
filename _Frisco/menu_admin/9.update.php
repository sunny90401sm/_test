



<?
	//데이터 베이스 연결하기
	include "../includes/0.db_info.inc";

	// 글의 비밀번호를 가져온다.
	//$query = "SELECT * FROM menu WHERE id='$_POST[id]'";
	//$result=mysql_query($query, $conn);
	//$row=mysql_fetch_array($result);

	//입력된 값과 비교한다.
//	if ($pass==$row[pass]) { //비밀번호가 일치하는 경우
		$query = "UPDATE notice SET title='$_POST[title]', price='$_POST[price]', content='$_POST[content]', on_off='$_POST[on_off]', takeout='$_POST[takeout]' WHERE id='$_POST[id]'";
		$result=mysql_query($query, $conn);
		
		
//	}

//	else { // 비밀번호가 일치하지 않는 경우
//		echo ("
//		<script>
//		alert('비밀번호가 틀립니다.');
//		history.go(-1);
//		</script>
//		");
//		exit;
//	}

	//데이터베이스와의 연결 종료
	mysql_close($conn);

		
	echo ("<meta http-equiv='Refresh' content='1; 
	URL=8.edit.php?id=$_POST[id]'>");
	
?>




<center>
<font size=2>save ok</font>
