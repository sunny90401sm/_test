<? 
	include '../includes/flowermound_head_menu.inc';
	
	//$query = "SELECT * FROM menu WHERE catalog='baked' ORDER BY title ASC";
	$query = "SELECT * FROM menu WHERE catalog='$_GET[title]' AND on_off='on' ORDER BY title ASC";
	$result = mysql_query($query, $conn);	
	
	if($_GET[title]=="low"){
		$_GET[title]="LOW CARB";  // LOW CRAB에  따움표 해주야함, 공백이 들어가서 문자열로 인식되야함.
	}
	

	
?>

				<!-- Main -->
					<div id="main">
						<div class="inner" align=center>
							<section>
								<article><h2><? echo "$_GET[title]";?> ROLL</h2></article>
							</section>
							<section class="tiles">										
								<?									
								while($row=mysql_fetch_array($result))
								{
								?>
								<article>
									<span class="image"><img src="../images/<?=$row[catalog]?>/<?=$row[title]?>.jpg" alt="" /></span>
									<br>
									<h2 class="menu_title_clolor"><?=$row[title]?></h2>
									<div class="content">(<?=$row[content]?>)<font color=black>&nbsp;&nbsp;-&nbsp;&nbsp;<?=$row[price]?></font></div>
								</article>
								<?
									} // end While
									//데이터베이스와의 연결을 끝는다.
									mysql_close($conn);
								?>			
							</section>
						</div>
					</div>	
<? include '../includes/flowermound_footer.inc';?>




