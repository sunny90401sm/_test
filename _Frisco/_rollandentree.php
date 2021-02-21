<? 
	include '../includes/frisco_head_menu.inc'; 
	
	//$query = "SELECT * FROM menu WHERE catalog='baked' ORDER BY title ASC";
	$query = "SELECT * FROM menu WHERE catalog='$_GET[title]' AND on_off='on' ORDER BY title ASC";
	$result = mysql_query($query, $conn);
		
	$query1 = "SELECT * FROM menu WHERE catalog='$_GET[title1]' AND on_off='on' ORDER BY title ASC";
	$result1 = mysql_query($query1, $conn);

	
	if($_GET[title]=="ap"){
		$_GET[title]=APPETIZER;
	}
	
?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<section class="tiles">	
								<article>
									<h2><? echo "$_GET[title]";?></h2>				
									<ol>
										<?									
										while($row=mysql_fetch_array($result))
										{
										?>
										<li>
											<font class="menu_title_clolor"><?=$row[title]?></font>&nbsp;&nbsp; <?=$row[price]?>
											<br>
												<?
													$content1=$row[content];
													if(!$content1){
												?>
													<?=$row[content]?>
												<?
													} else{
												?>
													(<?=$row[content]?>)
												<?
													}
												?>
										</li>
										<?
										} // end While
										?>						
									</ol>
								</article>
								<article>
									<h2><? echo "$_GET[title1]";?></h2>
									<ol>
										<?																																									while($row1=mysql_fetch_array($result1))
											{
										?>
										<li>
											<font class="menu_title_clolor"><?=$row1[title]?></font>&nbsp;&nbsp; <?=$row1[price]?>
											<br>
											<?
											$content2=$row1[content];
											if(!$content2){
											?>
											<?=$row1[content]?>
											<?
											} else{
											?>
											(<?=$row1[content]?>)
											<?
											}
											?>
										</li>
								
										<?
											} // end While
											//데이터베이스와의 연결을 끝는다.
																
											mysql_close($conn);
										?>					
									</ol>							
								</article>
							</section>
						</div>
					</div>
<? include '../includes/frisco_footer.inc';?>
