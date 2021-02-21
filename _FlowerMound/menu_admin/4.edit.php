<html>
<head>
<title></title>
<style>
<!--
td { font-size : 9pt; }
A:link { font : 9pt; color : black; text-decoration : none; 
font-family: 굴림; font-size : 9pt; }
A:visited { text-decoration : none; color : black; 
font-size : 9pt; }
A:hover { text-decoration : underline; color : black; 
font-size : 9pt;}
-->
</style>
</head>

<?
	//데이터 베이스 연결하기

	include "../includes/0.db_info.inc";
	// 먼저 쓴 글의 정보를 가져온다.
	$result=mysql_query("SELECT * FROM menu WHERE id='$_GET[id]'", $conn);
	$row=mysql_fetch_array($result);
?>

<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action="5.update.php" method="post">
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
	<tr>
		<td height=20 align=center bgcolor=#999999>
			<font color=white><B>edit</B></font>
		</td>
	</tr>
<!-- 입력 부분 -->
	<tr>
		<td bgcolor=white>&nbsp;
		<table>

			<tr>
				<td width=60 align=left >id</td>
				<td align=left >
					<INPUT type=hidden name=id size=20 value=<?=$row[id]?>>
					<?=$row[id]?>
				</td>
			</tr>
			
			<tr>
				<td width=60 align=left >title</td>
				<td align=left >
					<INPUT type=hidden name=title size=20 value=<?=$row[title]?>>
					<?=$row[title]?>
				</td>
			</tr>
			<tr>
				<td width=60 align=left >price</td>
				<td align=left >
					<INPUT type=text name=price size=20 value=<?=$row[price]?>>
				</td>
			</tr>
			<tr>
				<td width=60 align=left >on_off</td>
				<td align=left >
					<?=$row[on_off]?> ---->
					<? $on_off1=$row[on_off];?>
					<INPUT type=radio name="on_off" value="on" <? if($on_off1==on) echo "checked"; ?>> ON
					<INPUT type=radio name="on_off" value="off" <? if($on_off1==off) echo "checked"; ?>> OFF
				</td>
			</tr>
			<tr>
				<td width=60 align=left >catalog</td>
				<td align=left >
					<?=$row[catalog]?> --->
					
					<? $catalog1=$row[catalog];?>
					<select name="catalog">
							<option value="sushi" <? if($catalog1==sushi) echo "selected"; ?>>sushi</option>
							<option value="sashimi" <? if($catalog1==sashimi) echo "selected"; ?>>sashimi</option>
							<option value="roll" <? if($catalog1==roll) echo "selected"; ?>>roll</option>
							<option value="combo" <? if($catalog1==combo) echo "selected"; ?>>sushi combo</option>
							<option value="baked" <? if($catalog1==baked) echo "selected"; ?>>baked</option>
							<option value="fresh" <? if($catalog1==fresh) echo "selected"; ?>>fresh</option>
							<option value="tempura" <? if($catalog1==tempura) echo "selected"; ?>>tempura</option>
							<option value="low" <? if($catalog1==low) echo "selected"; ?>>low</option>
							<option value="ap" <? if($catalog1==ap) echo "selected"; ?>>ap</option>
							<option value="salad" <? if($catalog1==salad) echo "selected"; ?>>salad</option>
							<option value="entree" <? if($catalog1==entree) echo "selected"; ?>>entree</option>
							<option value="noodle" <? if($catalog1==noodle) echo "selected"; ?>>noodle</option>
							
					</select>	

					
				</td>
			</tr>
			<tr>
				<td width=60 align=left >content</td>
				<td align=left >
					<TEXTAREA name=content cols=65 rows=15><?=$row[content]?></TEXTAREA>
				</td>
			</tr>
			<tr>
				<td colspan=10 align=center>
					<INPUT type=submit value="save">
					&nbsp;&nbsp;
					<INPUT type=reset value="reset">
					&nbsp;&nbsp;
					<a href="1.list.php?catalog=<?=$row[catalog]?>">list</a>

					
				</td>
			</tr>
			</TABLE>
		</td>
	</tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
</body>
</html>