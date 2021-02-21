<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?
//데이터 베이스 연결하기
include "../includes/0.db_info.inc";

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

if (!$_POST[catalog]){
	$catalo=$_GET[catalog];	
} else {
	$catalo=$_POST[catalog];
}



$query = "SELECT * FROM menu WHERE catalog='$catalo' ORDER BY title ASC";
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
<title>list</title>

</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
<!-- 게시판 타이틀 -->
<a href="00.index.php">admin home</a>
<font size=2>list</font>
<BR>
<BR>


	<a href="2.write.php">write</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<p>	
	<form action="<?$PHP_SELF?>" method="post">
		<select name="catalog">
				<option value="sushi">sushi</option>
				<option value="sashimi">sashimi</option>
				<option value="roll">roll</option>
				<option value="combo">sushi combo</option>
				<option value="baked">baked</option>
				<option value="fresh">fresh</option>
				<option value="tempura">tempura</option>
				<option value="low">low</option>
				<option value="ap">ap</option>
				<option value="salad">salad</option>
				<option value="entree">entree</option>
				<option value="noodle">noodle</option>
		</select>	
		<INPUT type=submit value="change">
	</form>

<p>

<? 
	
	echo "$_POST[catalog]";
		
?>




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
		<font color=white>catalog</font>
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
		<a href="4.edit.php?id=<?=$row[id]?>">
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
		<font color=black><?=$row[catalog]?></font>
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
<!-- 게시물 리스트를 보이기 위한 테이블 끝-->





					<!-- 페이지를 표시하기 위한 테이블 
					<table border=0>
					<tr>
						<td width=600 height=20 align=center rowspan=4>
						<font color=gray>
						&nbsp;
					<?
					$start_page = floor(($current_page - 1) / $page_list_size) 
									* $page_list_size + 1;
					
					# 페이지 리스트의 마지막 페이지가 몇 번째 페이지인지 구하는 부분이다.
					$end_page = $start_page + $page_list_size - 1;
					
					if ($total_page < $end_page) $end_page = $total_page;
					if ($start_page >= $page_list_size) {
						# 이전 페이지 리스트값은 첫 번째 페이지에서 한 페이지 감소하면 된다.
						# $page_size 를 곱해주는 이유는 글번호로 표시하기 위해서이다.
					
						$prev_list = ($start_page - 2)*$page_size;
						echo "<a href=\"$PHP_SELF?no=$prev_list\">prev</a>\n";
					}
					
					# 페이지 리스트를 출력
					for ($i=$start_page;$i <= $end_page;$i++) {
						$page= ($i-1) * $page_size;// 페이지값을 no 값으로 변환.
						if ($no!=$page){ //현재 페이지가 아닐 경우만 링크를 표시
							echo "<a href=\"$PHP_SELF?no=$page\">";
						}
						
						echo " $i "; //페이지를 표시
						
						if ($no!=$page){
							echo "</a>";
						}
					}
					
					# 다음 페이지 리스트가 필요할때는 총 페이지가 마지막 리스트보다 클 때이다.
					# 리스트를 다 뿌리고도 더 뿌려줄 페이지가 남았을때 다음 버튼이 필요할 것이다.
					if($total_page > $end_page)
					{
						$next_list = $end_page * $page_size;
						echo "<a href=$PHP_SELF?no=$next_list>next</a><p>";
					}
					?>
					
						</font>
						</td>
					</tr>
					</table>
					-->



</center>
</body>
</html>