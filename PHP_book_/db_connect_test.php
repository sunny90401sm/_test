
<?

// MySQL 에 sunny란 유저로 접속한다.

if($connect = mysql_connect('mysql','sunny','dlatmdals'))

	echo " MySQL 에 연결되었습니다.<br>\n" ; 
else 
{

	// 문제가 발생하면 mysql _connect()는 fal se를 반환하므로 이 부분이 실행된다.

	echo " MySQL 연결에 문제가 발생하였습니다.<br>\n" ;

	exit; 
} 



// 연결을 구분하는 $connect변수를 가지고 test를 선택한다. 
if(mysql_select_db('test' ,$connect))

	echo "test db를 선택하였습니다.<br>\n" ; 
else 
{

	// DB선택에 문제 발생하면 fal se를 반환하므로 이 부분이 실행된다.

	echo " test odb를 선택하는데 문제가 발생하였습니다.<br>\n" ;

	exit; 
} 


// DB연결을 종료한다. 
mysql_close($connect);

?>