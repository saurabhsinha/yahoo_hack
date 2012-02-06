<ul>
					
					    <?php
					    if(!isset($userFriends))
					    $userFriends=$_SESSION['userfriend'];
					    if(isset($_GET['num']))
					    $num=$_GET['num'];
						if(!isset($_GET['num']))
					   // if($num=='')
					    $num='all';
					   					    
					   for($i=0;$i<=$_SESSION['count'];$i++){
					   if(isset($userFriends['data'][$i]['work']['0']['start_date']))
					   {
					   $work=$userFriends['data'][$i]['work']['0']['start_date'];
					  
					   if($work!='0000-00')
					   $date1=explode('-',$work);
					   else
					   {
					   $date1['0']='';
					   $work='';
					   }
					   $result=date("Y")-$date1['0'];
					   }
					   else
					   $work=0;
					   if((($work)&&($result>$num))||(($work)&&($num=="all")))
					   {
					   ?>
					   <li class="recentpicsli1"><a href="<?php echo $userFriends['data'][$i]['link']; ?>"><img class="imgprint" src="<?php echo $userFriends['data'][$i]['picture']; ?>"></img></a><br />
					   <?php
					   
					   if(strlen($userFriends['data'][$i]['name'])>10)
					   {
					   	$userFriends['data'][$i]['name']=substr($userFriends['data'][$i]['name'],0,8);
						$userFriends['data'][$i]['name']=$userFriends['data'][$i]['name'].'...';
					   }
						echo $userFriends['data'][$i]['name']."<br />";
						
						if(isset($userFriends['data'][$i]['work']['0']['start_date'])&&($userFriends['data'][$i]['work']['0']['start_date']!='0000-00'))
						{
						echo $userFriends['data'][$i]['work']['0']['start_date']."<br />";
						
						echo "expr".$result;
						}
						}
						else
						echo '';
						}
						?>
						</li>
						</ul>
