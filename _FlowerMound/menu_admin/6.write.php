

				<!-- Main -->
					<div id="main">
						<div class="inner">
							
							<section>
								<article>
									<h2>notice input</h2>
`								</article>
							</section>

							<section class="tiles">								
								<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다. -->
<form action="7.insert.php" method="post">
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
					<td width=60 align=left >title</td>
					<td align=left >
						<INPUT type=text name="title" size="40" maxlength="40">
					</td>
				</tr>
				<tr>
					<td width=60 align=left >price</td>
					<td align=left >
						<INPUT type=text name="price" size="20" maxlength="25">
					</td>
				</tr>
				<tr>
					<td width=60 align=left >on_off</td>
					<td align=left >
						<INPUT type=radio name="on_off" value="on" checked> menu ON
						<INPUT type=radio name="on_off" value="off"> menu OFF
					</td>
				</tr>
				<tr>
					<td width=60 align=left >take out</td>
					<td align=left >
						<INPUT type=radio name="takeout" value="Take Out Only" checked> take out only
						<INPUT type=radio name="takeout" value="Dine In Only"> dine in only	
						<INPUT type=radio name="takeout" value=""> both	
											
					</td>
				</tr>
				<tr>
					<td width=60 align=left >content</td>
					<td align=left >
						<TEXTAREA name="content" cols=65 rows=15></TEXTAREA>
					</td>
				</tr>
				<tr>
					<td colspan=10 align=center>
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

































