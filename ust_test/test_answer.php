<div class="row">
	<div class="col-sm-8">
		<table border="1|0">
							<tr>
								<td>
									<?php  
									//declear blan variables for count right(r), wrong(w), Blank(b).
									$r1 = $r2 = $r3 =$r4=$r5=$r6=$r7=$r8=$r9=$r10=$r11=$r12= $r13=$r14=$r15=$r16=$r17=$r18=$r19=$r20=$r21=$r22=$r23=$r24=$r25=$r26=$r27=$r28=$r29=$r30=$r31=$r32=$r33=$r34=$r35=$r36=$r37=$r38=$r39=$r40=$r41=$r42=$r43=$r44=$r45=$r46=$r47=$r48=$r49=$r50="";
									$w1 = $w2 = $w3 =$w4=$w5=$w6=$w7=$w8=$w9=$w10=$w11=$w12= $w13=$w14=$w15=$w16=$w17=$w18=$w19=$w20=$w21=$w22=$w23=$w24=$w25=$w26=$w27=$w28=$w29=$w30=$w31=$w32=$w33=$w34=$w35=$w36=$w37=$w38=$w39=$w40=$w41=$w42=$w43=$w44=$w45=$w46=$w47=$w48=$w49=$w50="";
									$b1 = $b2 = $b3 =$b4=$b5=$b6=$b7=$b8=$b9=$b10=$b11=$b12= $b13=$b14=$b15=$b16=$b17=$b18=$b19=$b20=$b21=$b22=$b23=$b24=$b25=$b26=$b27=$b28=$b29=$b30=$b31=$b32=$b33=$b34=$b35=$b36=$b37=$b38=$b39=$b40=$b41=$b42=$b43=$b44=$b45=$b46=$b47=$b48=$b49=$b50="";
								if(isset($_POST['q1']))
									{
										$q1=$_POST['q1'];
									}
									else
									{
										$q1=NULL ;
									}
									if($q1 !=NULL)
									{
									if($q1!='1')
									{
										//count wrong answers
										$w1 = 1;
										//end
										echo "Q1- <span style=color:red>&#10006;</span>" ;

									}
									else
									{
										//count right answers
										$r1 = 1;
										//end
									echo	 "Q1- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b1 = 1;
										//end
										echo'Q1- <span style=color:blue>Nill</span>';}

									

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q2']))
									{
										$q2=$_POST['q2'];
									}
									else
									{
										$q2=NULL ;
									}
									if($q2 !=NULL)
									{
									if($q2!='1')
									{
										//count wrong answers
										$w2 = 1;
										//end
										echo "Q2-<span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r2 = 1;
										//end
									echo	 "Q2- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b2 = 1;
										//end
										echo'Q2- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q3']))
									{
										$q3=$_POST['q3'];
									}
									else
									{
										$q3=NULL ;
									}
									if($q3 !=NULL)
									{
									if($q3!='1')
									{
										//count wrong answers
										$w3 = 1;
										//end
										echo "Q3- <span style=color:red>&#10006;</span>" ;
									}
									else
									{
										//count right answers
										$r3 = 1;
										//end
									echo	 "Q3- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b3 = 1;
										//end
										echo'Q3- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q4']))
									{
										$q4=$_POST['q4'];
									}
									else
									{
										$q4 =NULL ;
									}
									if($q4 !=NULL)
									{
									if($q4 !='1')
									{
										//count wrong answers
										$w4 = 1;
										//end
										echo "Q4- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r4 = 1;
										//end
									echo	 "Q4- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b4 = 1;
										//end
										echo'Q4- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q5']))
									{
										$q5=$_POST['q5'];
									}
									else
									{
										$q5=NULL ;
									}
									if($q5 !=NULL)
									{
									if($q5!='1')
									{
										//count wrong answers
										$w5 = 1;
										//end
										echo "Q5- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r5 = 1;
										//end
									echo	 "Q5- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b5 = 1;
										//end
										echo'Q5- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q6']))
									{
										$q6 =$_POST['q6'];
									}
									else
									{
										$q6 =NULL ;
									}
									if($q6 !=NULL)
									{
									if($q6 !='1')
									{	
										//count wrong answers
										$w6 = 1;
										//end
										echo "Q6- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r6= 1;
										//end
									echo	 "Q6- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b6 = 1;
										//end
										echo'Q6- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q7']))
									{
										$q7=$_POST['q7'];
									}
									else
									{
										$q7 =NULL ;
									}
									if($q7 !=NULL)
									{
									if($q7 !='1')
									{
										//count wrong answers
										$w7 = 1;
										//end
										echo "Q7- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r7 = 1;
										//end
									echo	 "Q7- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b7 = 1;
										//end
										echo'Q7- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q8']))
									{
										$q8 =$_POST['q8'];
									}
									else
									{
										$q8=NULL ;
									}
									if($q8 !=NULL)
									{
									if($q8 !='1')
									{
										//count wrong answers
										$w8 = 1;
										//end
										echo "Q8- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r8 = 1;
										//end
									echo	 "Q8- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b8 = 1;
										//end
										echo'Q8- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q9']))
									{
										$q9=$_POST['q9'];
									}
									else
									{
										$q9=NULL ;
									}
									if($q9 !=NULL)
									{
									if($q9!='1')
									{
										//count wrong answers
										$w9 = 1;
										//end
										echo "Q9- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r9 = 1;
										//end
									echo	 "Q9- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b9 = 1;
										//end
										echo'Q9- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 

								</td>
								<td>
									<?php  
										if(isset($_POST['q10']))
											{
												$q10=$_POST['q10'];
											}
											else
											{
												$q10=NULL ;
											}
											if($q10 !=NULL)
											{
											if($q10!='1')
											{
												//count wrong answers
												$w10 = 1;
												//end
												echo "Q10- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r10 = 1;
												//end
											echo	 "Q10- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b10 = 1;
												//end
												echo'Q10- <span style=color:blue>Nill</span>';}
									?> 
									</td>
									</tr>
									<tr>
									<td>
										<?php  
										if(isset($_POST['q11']))
											{
												$q11=$_POST['q11'];
											}
											else
											{
												$q11=NULL ;
											}
											if($q11 !=NULL)
											{
											if($q11!='1')
											{
												//count wrong answers
												$w11 = 1;
												//end
												echo "Q11- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r11 = 1;
												//end
											echo	 "Q11- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b11 = 1;
												//end
												echo'Q11- <span style=color:blue>Nill</span>';}
									?> 
									</td>
									<td>
										<?php  
										if(isset($_POST['q12']))
											{
												$q12=$_POST['q12'];
											}
											else
											{
												$q12=NULL ;
											}
											if($q12 !=NULL)
											{
											if($q12!='1')
											{
												//count wrong answers
												$w12 = 1;
												//end
												echo "Q12- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r12 = 1;
												//end
											echo	 "Q12- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b12 = 1;
												//end
												echo'Q12- <span style=color:blue>Nill</span>';}
									?> 
									</td>

							
								<td>
									<?php  
								if(isset($_POST['q13']))
									{
										$q13=$_POST['q13'];
									}
									else
									{
										$q13=NULL ;
									}
									if($q13 !=NULL)
									{
									if($q13!='1')
									{
										//count wrong answers
										$w13 = 1;
										//end
										echo "Q13- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r13 = 1;
										//end
									echo	 "Q13- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b13 = 1;
										//end
										echo "Q13- <span style=color:blue>Nill</span>";}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q14']))
									{
										$q14=$_POST['q14'];
									}
									else
									{
										$q14=NULL ;
									}
									if($q14 !=NULL)
									{
									if($q14!='1')
									{
										//count wrong answers
										$w14 = 1;
										//end
										echo "Q14- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r14 = 1;
										//end
									echo	 "Q14- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b14 = 1;
										//end
										echo'Q14- <span style=color:blue>Nill</span>';}

									

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q15']))
									{
										$q15=$_POST['q15'];
									}
									else
									{
										$q15=NULL ;
									}
									if($q15 !=NULL)
									{
									if($q15!='1')
									{
										//count wrong answers
										$w15 = 1;
										//end
										echo "Q15- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r15 = 1;
										//end
									echo	 "Q15- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b15 = 1;
										//end
										echo'Q15- <span style=color:blue>Nill</span>';}

									

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q16']))
									{
										$q16=$_POST['q16'];
									}
									else
									{
										$q16 =NULL ;
									}
									if($q16 !=NULL)
									{
									if($q16 !='1')
									{
										//count wrong answers
										$w16 = 1;
										//end
										echo "Q16- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r16 = 1;
										//end
									echo	 "Q16- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b16 = 1;
										//end
										echo'Q16- <span style=color:blue>Nill</span>';}

									

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q17']))
									{
										$q17=$_POST['q17'];
									}
									else
									{
										$q17=NULL ;
									}
									if($q17 !=NULL)
									{
									if($q17!='1')
									{
										//count wrong answers
										$w17 = 1;
										//end
										echo "Q17- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r17 = 1;
										//end
									echo	 "Q17- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b17 = 1;
										//end
										echo'Q17- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q18']))
									{
										$q18 =$_POST['q18'];
									}
									else
									{
										$q18 =NULL ;
									}
									if($q18 !=NULL)
									{
									if($q18 !='1')
									{
										//count wrong answers
										$w18 = 1;
										//end
										echo "Q18- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r18 = 1;
										//end
									echo	 "Q18- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b18 = 1;
										//end
										echo'Q18- <span style=color:blue>Nill</span>';}

									

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q19']))
									{
										$q19=$_POST['q19'];
									}
									else
									{
										$q19 =NULL ;
									}
									if($q19 !=NULL)
									{
									if($q19 !='1')
									{
										//count wrong answers
										$w19 = 1;
										//end
										echo "Q19- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r19 = 1;
										//end
									echo	 "Q19- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b19 = 1;
										//end
										echo'Q19- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q20']))
									{
										$q20 =$_POST['q20'];
									}
									else
									{
										$q20=NULL ;
									}
									if($q20 !=NULL)
									{
									if($q20 !='1')
									{
										//count wrong answers
										$w20 = 1;
										//end
										echo "Q20- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r20 = 1;
										//end
									echo	 "Q20- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b20 = 1;
										//end
										echo'Q20- <span style=color:blue>Nill</span>';}

									

							?> 
								</td>
								</tr>
								<tr>
								<td>
									<?php  
								if(isset($_POST['q21']))
									{
										$q21=$_POST['q21'];
									}
									else
									{
										$q21=NULL ;
									}
									if($q21 !=NULL)
									{
									if($q21!='1')
									{
										//count wrong answers
										$w21 = 1;
										//end
										echo "Q21- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r21 = 1;
										//end
									echo	 "Q21- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b21 = 1;
										//end
										echo'Q21- <span style=color:blue>Nill</span>';}

									

							?> 

								</td>
								<td>
									<?php  
										if(isset($_POST['q22']))
											{
												$q22=$_POST['q22'];
											}
											else
											{
												$q22=NULL ;
											}
											if($q22 !=NULL)
											{
											if($q22!='1')
											{
												//count wrong answers
												$w22 = 1;
												//end
												echo "Q22- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r22 = 1;
												//end
											echo	 "Q22- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b22 = 1;
												//end
												echo'Q22- <span style=color:blue>Nill</span>';}
									?> 
									</td>
									<td>
										<?php  
										if(isset($_POST['q23']))
											{
												$q23=$_POST['q23'];
											}
											else
											{
												$q23=NULL ;
											}
											if($q23 !=NULL)
											{
											if($q23!='1')
											{
												//count wrong answers
												$w23 = 1;
												//end
												echo "Q23- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r23 = 1;
												//end
											echo	 "Q23- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b23 = 1;
												//end
												echo'Q23- <span style=color:blue>Nill</span>';}
									?> 
									</td>
									<td>
										<?php  
										if(isset($_POST['q24']))
											{
												$q24=$_POST['q24'];
											}
											else
											{
												$q24=NULL ;
											}
											if($q24 !=NULL)
											{
											if($q24!='1')
											{
												//count wrong answers
												$w24 = 1;
												//end
												echo "Q24- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r24 = 1;
												//end
											echo	 "Q24- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b24 = 1;
												//end
												echo'Q24- <span style=color:blue>Nill</span>';}
									?> 
									</td>

									<td>
									<?php  
								if(isset($_POST['q25']))
									{
										$q25=$_POST['q25'];
									}
									else
									{
										$q25=NULL ;
									}
									if($q25 !=NULL)
									{
									if($q25!='1')
									{
										//count wrong answers
										$w25 = 1;
										//end
										echo "Q25- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r25 = 1;
										//end
									echo	 "Q25- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b25 = 1;
										//end
										echo'Q25- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q26']))
									{
										$q26=$_POST['q26'];
									}
									else
									{
										$q26=NULL ;
									}
									if($q26 !=NULL)
									{
									if($q26!='1')
									{
										//count wrong answers
										$w26 = 1;
										//end
										echo "Q26-<span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r26 = 1;
										//end
									echo	 "Q26- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b26 = 1;
										//end
										echo'Q26- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q27']))
									{
										$q27=$_POST['q27'];
									}
									else
									{
										$q27=NULL ;
									}
									if($q27 !=NULL)
									{
									if($q27!='1')
									{
										//count wrong answers
										$w27 = 1;
										//end
										echo "Q27- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r27 = 1;
										//end
									echo	 "Q27- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b27 = 1;
										//end
										echo'Q27- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								
								</td>
								<td>
									<?php  
								if(isset($_POST['q28']))
									{
										$q28 =$_POST['q28'];
									}
									else
									{
										$q28 =NULL ;
									}
									if($q28 !=NULL)
									{
									if($q28!='1')
									{
										//count wrong answers
										$w28 = 1;
										//end
										echo "Q28- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r28 = 1;
										//end
									echo	 "Q28- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b28 = 1;
										//end
										echo'Q28- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q29']))
									{
										$q29 =$_POST['q29'];
									}
									else
									{
										$q29 =NULL ;
									}
									if($q29 !=NULL)
									{
									if($q29 !='1')
									{
										//count wrong answers
										$w29 = 1;
										//end
										echo "Q29- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r29 = 1;
										//end
									echo	 "Q29- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b29 = 1;
										//end
										echo'Q29- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q30']))
									{
										$q30 =$_POST['q30'];
									}
									else
									{
										$q30 =NULL ;
									}
									if($q30 !=NULL)
									{
									if($q30 !='1')
									{
										//count wrong answers
										$w30 = 1;
										//end
										echo "Q30- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r30 = 1;
										//end
									echo	 "Q30- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b30 = 1;
										//end
										echo'Q30- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								</tr>
								<tr>
								<td>
									<?php  
								if(isset($_POST['q31']))
									{
										$q31 =$_POST['q31'];
									}
									else
									{
										$q31=NULL ;
									}
									if($q31 !=NULL)
									{
									if($q31 !='1')
									{
										//count wrong answers
										$w31 = 1;
										//end
										echo "Q31- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r31 = 1;
										//end
									echo	 "Q31- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b31 = 1;
										//end
										echo'Q31- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q32']))
									{
										$q32=$_POST['q32'];
									}
									else
									{
										$q32=NULL ;
									}
									if($q32 !=NULL)
									{
									if($q32!='1')
									{
										//count wrong answers
										$w32 = 1;
										//end
										echo "Q32- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r32 = 1;
										//end
									echo	 "Q32- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b32 = 1;
										//end
										echo'Q32- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 

								</td>
								<td>
									<?php  
										if(isset($_POST['q33']))
											{
												$q33 =$_POST['q33'];
											}
											else
											{
												$q33 =NULL ;
											}
											if($q33 !=NULL)
											{
											if($q33 !='1')
											{
												//count wrong answers
												$w33 = 1;
												//end
												echo "Q33- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r33 = 1;
												//end
											echo	 "Q33- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b33 = 1;
												//end
												echo'Q33- <span style=color:blue>Nill</span>';}
									?> 
									</td>
									<td>
										<?php  
										if(isset($_POST['q34']))
											{
												$q34=$_POST['q34'];
											}
											else
											{
												$q34=NULL ;
											}
											if($q34 !=NULL)
											{
											if($q34 !='1')
											{
												//count wrong answers
												$w34 = 1;
												//end
												echo "Q34- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r34 = 1;
												//end
											echo	 "Q34- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b34 = 1;
												//end
												echo'Q34- <span style=color:blue>Nill</span>';}
									?> 
									</td>
									<td>
										<?php  
										if(isset($_POST['q35']))
											{
												$q35 =$_POST['q35'];
											}
											else
											{
												$q35=NULL ;
											}
											if($q35 !=NULL)
											{
											if($q35 !='1')
											{
												//count wrong answers
												$w35 = 1;
												//end
												echo "Q35- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r35 = 1;
												//end
											echo	 "Q35- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b35 = 1;
												//end
												echo'Q35- <span style=color:blue>Nill</span>';}
									?> 
									</td>

							
								<td>
									<?php  
								if(isset($_POST['q36']))
									{
										$q36=$_POST['q36'];
									}
									else
									{
										$q36=NULL ;
									}
									if($q36 !=NULL)
									{
									if($q36!='1')
									{
										//count wrong answers
										$w36 = 1;
										//end
										echo "Q36- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r36 = 1;
										//end
									echo	 "Q36- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b36 = 1;
										//end
										echo'Q36- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
							</td>
							
								
								<td>
									<?php  
								if(isset($_POST['q37']))
									{
										$q37=$_POST['q37'];
									}
									else
									{
										$q37=NULL ;
									}
									if($q37 !=NULL)
									{
									if($q37!='1')
									{
										//count wrong answers
										$w37 = 1;
										//end
										echo "Q37-<span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r37 = 1;
										//end
									echo	 "Q37- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b37 = 1;
										//end
										echo'Q37- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q38']))
									{
										$q38=$_POST['q38'];
									}
									else
									{
										$q38=NULL ;
									}
									if($q38 !=NULL)
									{
									if($q38!='1')
									{
										//count wrong answers
										$w38 = 1;
										//end
										echo "Q38- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r38 = 1;
										//end
									echo	 "Q38- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b38 = 1;
										//end
										echo'Q38- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q39']))
									{
										$q39=$_POST['q39'];
									}
									else
									{
										$q39 =NULL ;
									}
									if($q39 !=NULL)
									{
									if($q39 !='1')
									{
										//count wrong answers
										$w39 = 1;
										//end
										echo "Q39- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r39 = 1;
										//end
									echo	 "Q39- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b39 = 1;
										//end
										echo'Q39- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q40']))
									{
										$q40=$_POST['q40'];
									}
									else
									{
										$q40=NULL ;
									}
									if($q40 !=NULL)
									{
									if($q40!='1')
									{
										//count wrong answers
										$w40 = 1;
										//end
										echo "Q40- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r40 = 1;
										//end
									echo	 "Q40- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b40 = 1;
										//end
										echo'Q40- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								</tr>
								<tr>
								<td>
									<?php  
								if(isset($_POST['q41']))
									{
										$q41 =$_POST['q41'];
									}
									else
									{
										$q41 =NULL ;
									}
									if($q41 !=NULL)
									{
									if($q41 !='1')
									{
										//count wrong answers
										$w41 = 1;
										//end
										echo "Q41)- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r41 = 1;
										//end
									echo	 "Q41)- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b41 = 1;
										//end
										echo'Q41)- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q42']))
									{
										$q42=$_POST['q42'];
									}
									else
									{
										$q42 =NULL ;
									}
									if($q42 !=NULL)
									{
									if($q42 !='1')
									{
										//count wrong answers
										$w42 = 1;
										//end
										echo "Q42)- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r42 = 1;
										//end
									echo	 "Q42)- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b42 = 1;
										//end
										echo'Q42)- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q43']))
									{
										$q43 =$_POST['q43'];
									}
									else
									{
										$q43=NULL ;
									}
									if($q43 !=NULL)
									{
									if($q43 !='1')
									{
										//count wrong answers
										$w43 = 1;
										//end
										echo "Q43)- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r43 = 1;
										//end
									echo	 "Q43)- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b43 = 1;
										//end
										echo'Q43)- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q44']))
									{
										$q44=$_POST['q44'];
									}
									else
									{
										$q44=NULL ;
									}
									if($q44 !=NULL)
									{
									if($q44!='1')
									{
										//count wrong answers
										$w44 = 1;
										//end
										echo "Q44)- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r44 = 1;
										//end
									echo	 "Q44)- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b44 = 1;
										//end
										echo'Q44)- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 

								</td>
								<td>
									<?php  
										if(isset($_POST['q45']))
											{
												$q45=$_POST['q45'];
											}
											else
											{
												$q45=NULL ;
											}
											if($q45 !=NULL)
											{
											if($q45!='1')
											{
												//count wrong answers
												$w45 = 1;
												//end
												echo "Q45)- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r45 = 1;
												//end
											echo	 "Q45)- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b45 = 1;
												//end
												echo'Q45)- <span style=color:blue>Nill</span>';}
									?> 
									</td>
									<td>
										<?php  
										if(isset($_POST['q46']))
											{
												$q46=$_POST['q46'];
											}
											else
											{
												$q46=NULL ;
											}
											if($q46 !=NULL)
											{
											if($q46!='1')
											{
												//count wrong answers
												$w46 = 1;
												//end
												echo "Q46)- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r46 = 1;
												//end
											echo	 "Q46)- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b46 = 1;
												//end
												echo'Q46)- <span style=color:blue>Nill</span>';}
									?> 
									</td>
									<td>
										<?php  
										if(isset($_POST['q47']))
											{
												$q47=$_POST['q47'];
											}
											else
											{
												$q47=NULL ;
											}
											if($q47 !=NULL)
											{
											if($q47!='1')
											{
												//count wrong answers
												$w47 = 1;
												//end
												echo "Q47)- <span style=color:red>&#10006;</span>" ;}
											else
											{
												//count right answers
												$r47 = 1;
												//end
											echo	 "Q47)- <span style=color:green>&#10004;</span>" ;}
											}
											else
											{
												//count blank answers
												$b47 = 1;
												//end
												echo'Q47)- <span style=color:blue>Nill</span>';}
									?> 
									</td>

								<td>
									<?php  
								if(isset($_POST['q48']))
									{
										$q48=$_POST['q48'];
									}
									else
									{
										$q48=NULL ;
									}
									if($q48 !=NULL)
									{
									if($q48!='48')
									{
										//count wrong answers
										$w48 = 1;
										//end
										echo "Q48)- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r48 = 1;
										//end
									echo	 "Q48)- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b48 = 1;
										//end
										echo'Q48)- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>

							
								<td>
									<?php  
								if(isset($_POST['q49']))
									{
										$q49=$_POST['q49'];
									}
									else
									{
										$q49=NULL ;
									}
									if($q49 !=NULL)
									{
									if($q49!='1')
									{
										//count wrong answers
										$w49 = 1;
										//end
										echo "Q49)-<span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r49 = 1;
										//end
									echo	 "Q49)- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count right answers
										$b49 = 1;
										//end
										echo'Q49)- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								<td>
									<?php  
								if(isset($_POST['q50']))
									{
										$q50=$_POST['q50'];
									}
									else
									{
										$q50=NULL ;
									}
									if($q50 !=NULL)
									{
									if($q50!='1')
									{
										//count wrong answers
										$w50 = 1;
										//end
										echo "Q50)- <span style=color:red>&#10006;</span>" ;}
									else
									{
										//count right answers
										$r50 = 1;
										//end
									echo	 "Q50)- <span style=color:green>&#10004;</span>" ;}
									}
									else
									{
										//count blank answers
										$b50 = 1;
										//end
										echo'Q50)- <span style=color:blue>Nill</span>';}

									echo '<br>';

							?> 
								</td>
								</tr>
						</table>

	</div>
	<div class="col-sm-4">
		<h3 style="color:#00FF00">Total Right Answer is:- 
			<?php 
				echo 	$r1 + $r2 + $r3 +$r4+$r5+$r6+$r7+$r8+$r9+$r10+$r11+$r12+ $r13+$r14+$r15+$r16+$r17+$r18+$r19+$r20+$r21+$r22+$r23+$r24+$r25+$r26+$r27+$r28+$r29+$r30+$r31+$r32+$r33+$r34+$r35+$r36+$r37+$r38+$r39+$r40+$r41+$r42+$r43+$r44+$r45+$r46+$r47+$r48+$r49+$r50;


			?>

		 </h3>
		<h3 style="color:#FF0000">Total Wrong Answer is:- 
			<?php  
			
			echo $w1 + $w2 + $w3 +$w4+$w5+$w6+$w7+$w8+$w9+$w10+$w11+$w12+ $w13+$w14+$w15+$w16+$w17+$w18+$w19+$w20+$w21+$w22+$w23+$w24+$w25+$w26+$w27+$w28+$w29+$w30+$w31+$w32+$w33+$w34+$w35+$w36+$w37+$w38+$w39+$w40+$w41+$w42+$w43+$w44+$w45+$w46+$w47+$w48+$w49+$w50; ;
				
			 ?>

		</h3>
		<h3 style="color:#0000FF">Not Attempt Answer is:- 
			<?php

				echo $b1 + $b2 + $b3 +$b4+$b5+$b6+$b7+$b8+$b9+$b10+$b11+$b12+ $b13+$b14+$b15+$b16+$b17+$b18+$b19+$b20+$b21+$b22+$b23+$b24+$b25+$b26+$b27+$b28+$b29+$b30+$b31+$b32+$b33+$b34+$b35+$b36+$b37+$b38+$b39+$b40+$b41+$b42+$b43+$b44+$b45+$b46+$b47+$b48+$b49+$b50;


			?>


		</h3>

	</div>


</div>

						

