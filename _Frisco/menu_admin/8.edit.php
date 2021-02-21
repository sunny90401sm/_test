<?
include "../../includes/frisco_admin_head.inc";

?>


<?
	//데이터 베이스 연결하기

	// 먼저 쓴 글의 정보를 가져온다.
	$result=mysql_query("SELECT * FROM notice WHERE id='$_GET[id]'", $conn);
	$row=mysql_fetch_array($result);
?>

<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action="9.update.php" method="post">
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
	<tr>
		<td height=20 align=center bgcolor=#999999>
			<font color=white><B>notice edit</B></font>
		</td>
	</tr>
<!-- 입력 부분 -->
	<tr>
		<td bgcolor=white>&nbsp;
		<table>

			<tr>
				<td width=60 align=left >id</td>
				<td align=left >
					<INPUT type=hidden name=id size=20 value="<?=$row[id]?>">
					<?=$row[id]?>
				</td>
			</tr>
			
			<tr>
				<td width=60 align=left >title</td>
				<td align=left >
					<INPUT type=text name=title size=20 value="<?=$row[title]?>">
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
				<td width=60 align=left >take out</td>
				<td align=left >
						<?=$row[takeout]?> ---->
					<? $takeout1=$row[takeout];?>
										
					<INPUT type=radio name="takeout" value="Take Out Only" <? if($takeout1=="Take Out Only") echo "checked"; ?>> take out only
					<INPUT type=radio name="takeout" value="Dine In Only" <? if($takeout1=="Dine In Only") echo "checked"; ?>> dine in only	
					<INPUT type=radio name="takeout" value="" <? if($takeout1=="") echo "checked"; ?>> both	
					
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
					<a href="1.list_notice.php">list</a>

					
				</td>
			</tr>
			</TABLE>
		</td>
	</tr>
<!-- 입력 부분 끝 -->
</table>
</form>
</center>
<? include '../../includes/frisco_admin_footer.inc';?> 