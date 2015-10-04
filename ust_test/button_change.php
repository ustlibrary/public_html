<?php  
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
									{echo "<span style=color:red>1</span>" ;}
									else
									{
									echo	 "<span style=color:green>1</span>" ;}
									}
									else
									{echo'<span style=color:blue>1</span>';}

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
									{echo "<span style=color:red>2</span>" ;}
									else
									{
									echo	 "<span style=color:green>2</span>" ;}
									}
									else
									{echo'<span style=color:blue>2</span>';}

								?>