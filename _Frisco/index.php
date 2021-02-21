<? 
	include '../includes/frisco_head_menu.inc';
	
?> 

<? 	
	
	
	//$query = "SELECT * FROM menu WHERE catalog='baked' ORDER BY title ASC";
	$query = "SELECT * FROM notice WHERE on_off='on' ORDER BY title ASC";
	$result = mysql_query($query, $conn);	
	
		
?>


				<!-- Main -->
					<div id="main">
						<div class="inner">			
							
							<header>
								
								
								
								
								<table>
									
								<?									
								while($row=mysql_fetch_array($result))
								{
								?>
								
									<tr align="center">
										<td>
											<font size=6><?=$row[title]?></font>&nbsp;&nbsp;&nbsp;
											<font color=red size=7>$<?=$row[price]?></font><br><?=$row[content]?><br>
											<font color=red><?=$row[takeout]?></font>
								
											
										</td>
									</tr>
									<tr align="center">
											<td>Frisco : Tel. 469-888-4068&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax. 469-888-4124</td>
									</tr>
								

								
								
								
								
								<?
									} // end While
									//데이터베이스와의 연결을 끝는다.
									mysql_close($conn);
								?>			
					
								</table> 
								
								
								
							<!--							
								<table>
									<tr align="center">
										<td><font size=6>Special !! </font>&nbsp;&nbsp;&nbsp;<font color=red size=7>$45 </font><br>Any 5 roll on the Menu.<br><font color=red>Take Out Only</font></td>
									</tr>
									<tr align="center">
											<td>Tel. 469-888-4068&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax. 469-888-4124</td>
									</tr>
									<tr align="center">
										<td><font size=6>Special !! </font>&nbsp;&nbsp;&nbsp;<font color=red size=7>$29 </font><br>Any 3 roll on the Menu.<br><font color=red>Take Out Only</font></td>
									</tr>
									<tr align="center">
											<td>Tel. 469-888-4068&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax. 469-888-4124</td>
									</tr>
									<tr align="center">
										<td><font size=6>Special !! </font>&nbsp;&nbsp;&nbsp;<font color=red size=7>$20 </font><br>Any 2 roll on the Menu.<br><font color=red>Take Out Only</font></td>
									</tr>
									<tr align="center">
											<td>Tel. 469-888-4068&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fax. 469-888-4124</td>
									</tr>
								</table> 
							-->
								
							</header>				
						
							<section class="tiles">
								<!--
								<article class="style1">
									<span class="image">
										<img src="../images/pic01.jpg" alt="" />
									</span>
									<a href="00.ayce.php">
										<h2>AYCE</h2>
										<div class="content">
											<br>All You Can Eat (Dine-IN Only)</br>
											<br>$25.00 Per Person</br>
											<br>$15.00 Kids 4~8 Years</br>
										</div>
									</a>
								</article>
								-->
								<article class="style2">
									<span class="image">
										<!-- <img src="../images/pic02.jpg" alt="" /> -->
										<img src="../images/kitchen_sushi/salmon sushi.jpg" alt="" /> 

									</span>
									<a href="_rollandentree.php?title=sushi&title1=sashimi">
										<h2>Sushi & Sashimi</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<!--<img src="../images/pic03.jpg" alt="" />-->
										<img src="../images/kitchen_sushi/sashimi salad.jpg" alt="" />
										
									</span>
									<a href="_rollandentree.php?title=ap&title1=salad">
										<h2>Appetizer & Salad</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="../images/tempura/SALMON LOVER ROLL.jpg" alt="" />
									</span>
									<a href="_special_roll.php?title=tempura">
										<h2>Tempura Roll</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="../images/fresh/DAMU ROLL.jpg" alt="" />
									</span>
									<a href="_special_roll.php?title=fresh">
										<h2>Fresh Roll</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="../images/low/CUCUMBER SKIN ROLL C ROLL.jpg" alt="" />
									</span>
									<a href="_special_roll.php?title=low">
										<h2>Low Carb Roll</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="../images/baked/LOBSTER SPECIAL ROLL.jpg" alt="" />
									</span>
									<a href="_special_roll.php?title=baked">
										<h2>Baked Roll</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="../images/kitchen_sushi/california roll.jpg" alt="" />
									</span>
									<a href="_rollandentree.php?title=roll&title1=combo">
										<h2>Roll & Sushi Combo</h2>
										<div class="content">
										</div>
									</a>
								</article>

								<article class="style1">
									<span class="image">
										<img src="../images/kitchen_sushi/kichen combo.jpg" alt="" />
									</span>
									<a href="_rollandentree.php?title=entree&title1=noodle">
										<h2>Entree & Noodle</h2>
										<div class="content">
										</div>
									</a>
								</article>
	
							</section>
						</div>
					</div>
<? include '../includes/frisco_footer.inc';?> 
