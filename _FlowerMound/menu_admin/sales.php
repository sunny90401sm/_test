

				<!-- Main -->
					<div id="main">
						<div class="inner" align=center>
							
							<section>
								<article>
									<h2>sales input</h2>
`								</article>
							</section>

							<section class="tiles">								
								<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action="3.insert.php" method="post">
	<table width="580" border="0" cellpadding="2" cellspacing="1" bgcolor="#777777">
		<tr>
			<td height="20" align="center" bgcolor="#999999">
			<font color=white><B></B></font>
			</td>
		</tr>
		<!-- 입력 부분 -->
		<tr>
			<td bgcolor=white>&nbsp;
			<table>
				<tr>
					<td width=100 align=left >start money</td>
					<td align=left colspan=2>
						<INPUT type=text name="start_money" size="40">
					</td>
				</tr>
				<tr>
					<td width=100 align=left >total sales</td>
					<td align=left colspan=2>
						<INPUT  type=text name="total_sales" size="40">
					</td>
				</tr>
				<tr>
					<td width=100 align=left >----------</td>
					<td align=left colspan=2>---------------------------</td>
				</tr>
				<tr>
					<td width=100 align=left >cash</td>
					<td align=left colspan=2>
						<INPUT type=text name="cash" size="40">
					</td>
				</tr>
				<tr>
					<td width=100 align=left >credit</td>
					<td align=left colspan=2>
						<INPUT type=text name="credit" size="40">
					</td>
				</tr>
							
				<tr>
					<td width=100 align=left >delivery</td>
					
					<? 
						
					?>
					
					<td width=20 align=left >
						<select name="delivery_name">
							<option value="uber">uber</option>
							<option value="grubhub">grubhub</option>

						</select>	
					</td>
					<td width=100 align=left >
						<INPUT type=text name="delivery" size="40">
					</td>


					<?
						
					?>


				</tr>
				<tr>
					<td width=60 align=left >comments</td>
					<td align=left colspan=2>
						<TEXTAREA name="comments" cols=65 rows=15></TEXTAREA>
					</td>
				</tr>
				<tr>
					<td colspan=3 align=center>
						<INPUT type=submit value="save">
						&nbsp;&nbsp;
						<INPUT type=reset value="reset">
						&nbsp;&nbsp;
						<INPUT type=button value="Return List" 
						onclick="history.back(-1)">
					</td>
				</tr>
			</TABLE>
	</td>
	</tr>
	<!-- 입력 부분 끝 -->
	</table>
</form>
</center>	
							</section>



							</div>
					</div>



































