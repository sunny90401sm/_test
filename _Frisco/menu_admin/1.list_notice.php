

<?
include "../../includes/frisco_admin_head.inc";




# LIST 설정
# 1. 한 페이지에 보여질 게시물의 수
//$page_size=10;

//$page_list_size = 10;

//if (!$no || $no < 0) $no=0;

// 데이터베이스에서 페이지의 첫번째 글($no)부터 
// $page_size 만큼의 글을 가져온다.

//$query = "SELECT * FROM menu ORDER BY id DESC LIMIT $no,$page_size";
//$query = "SELECT * FROM menu ORDER BY title ASC LIMIT $no,$page_size";

//$query = "SELECT * FROM menu ORDER BY title DESC";



$query = "SELECT * FROM notice ORDER BY id ASC";
//$query = "SELECT * FROM menu WHERE catalog='$_GET[catalog]' ORDER BY title ASC";
$result = mysql_query($query, $conn);

// 총 게시물 수 를 구한다.
//$result_count=mysql_query("SELECT count(*) FROM menu",$conn);
//$result_row=mysql_fetch_row($result_count);
//$total_row = $result_row[0];
//결과의 첫번째 열이 count(*) 의 결과다.

# 총 페이지 계산
//if ($total_row <= 0) $total_row = 0;
//$total_page = ceil($total_row / $page_size);

# 현재 페이지 계산
//$current_page = ceil(($no+1)/$page_size);
?>
<html>
<head>
<title>notice list</title>

</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>

<p>
notice list
<BR>
<BR>


	&nbsp;&nbsp;&nbsp;&nbsp;<a href="6.write.php">notice input</a>
	<p>	
	



<!-- 게시물 리스트를 보이기 위한 테이블 -->
<table width=780 border=0 cellpadding=2 cellspacing=1 bgcolor="#777777">
<!-- 리스트 타이틀 부분 -->

<tr height=20 bgcolor=#999999>
	<td width=10 align=center>
		<font color=white>id</font>
	</td>
	<td width=30 align=center>
		<font color=white>on_off</font>
	</td>
	<td width=270 align=center>
		<font color=white>title</font>
	</td>
	<td width=50 align=center>
		<font color=white>price</font>
	</td>
	<td width=60 align=center>
		<font color=white>take out</font>
	</td>
	<td width=240 align=center>
		<font color=white>content</font>
	</td>
</tr>
<!-- 리스트 타이틀 끝 -->



<!-- 리스트 부분 시작 -->
<?
while($row=mysql_fetch_array($result))
{
?>
<!-- 행 시작 -->
<tr>
	
	<td height=20 bgcolor=white align=center>
		<?=$row[id]?>
	</td>
	<td height=20 bgcolor=white align=center>		
		<?=$row[on_off]?></a>
	</td>
	
	<td height=20 bgcolor=white>&nbsp;
		<a href="8.edit.php?id=<?=$row[id]?>">
		<?=$row[title]?></a>
	</td>
	<!-- 제목 끝 -->
	<!-- 이름 -->
	<td align=center height=20 bgcolor=white>
		<?=$row[price]?>
	</td>
	<!-- 이름 끝 -->
	<!-- 날짜 -->
	<td align=center height=20 bgcolor=white>
		<font color=black><?=$row[takeout]?></font>
	</td>
	<!-- 날짜 끝 -->
	<!-- 조회수 -->
	<td align=center height=20 bgcolor=white>
		<font color=black><?=$row[content]?></font>
	</td>
	<!-- 조회수 끝 -->
</tr>
<!-- 행 끝 -->
<?
} // end While
//데이터베이스와의 연결을 끝는다.
mysql_close($conn);
?>
</table>


</center>
<? include '../../includes/frisco_admin_footer.inc';?> 