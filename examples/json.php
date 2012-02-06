
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" media="screen" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="include/style.css" type="text/css" />
<link rel="stylesheet" href="include/vanus.css" type="text/css" />
<link rel="stylesheet" href="include/mainpage.css" type="text/css" />

<script type="text/javascript">
function ajax(str)
{
	
	if (window.XMLHttpRequest)
  	{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
 	}
	else
 	{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp.onreadystatechange=function()
  				{
  					if (xmlhttp.readyState==4 && xmlhttp.status==200)
    					{
    						
    						document.getElementById("thumbnailcontainer").innerHTML=xmlhttp.responseText;
    					}
    				}
    	
		xmlhttp.open("GET","filter/classall.php?num="+str,true);
	
	xmlhttp.send();
}
</script>
</head>
<body>
<div id="back">	
	<div id="mainheader">
		<div id="mainheadercontainer">
		  <div id="logo">
			<p></p>
		  </div>
	
		<div id="login">
		
			
		</div>
		</div>
	  
	</div>

	<div id="totalfullcontent">
		<div id="totalfullcontentfloat">
	
			<div id="fullcontentrecover">
				    
				     
				    <?php if ($user): ?>
				      <h3>You</h3>
				      <pre><?php echo $user_profile['name']; ?></pre>
				      <a id="logout" href="<?php echo $logoutUrl; ?>">Logout</a>
					<?php if ($user){ $userFriends = $facebook->api('/me/friends?fields=name,picture,link,work&access_token='. $facebook->getAccessToken());
					$_SESSION['userfriend']=$userFriends;
					
					    $count=count($userFriends['data']);
					    $_SESSION['count']=$count;?>
					<?php }?>
				      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture?type=large"></img>
				      
				      <select name="kuchv" onchange="ajax(this.value);">
				      	<option value="all" selected>all</option>
				      	<option value="1">1</option>
				      	<option value="2">2</option>
				      	<option value="3">3</option>
				      	<option value="4">4</option>
				      </select>
				     
				    
				      
					    <div id="thumbnailcontainer">
						<?php 
							include('filter/classall.php')
						?>
						</div>
					 
				      
				    <?php else: ?>
				      <div align="center"><strong><em>Please Login to either of the above networks to look for usefull eonsolidated information related to your friends/contacts.</em></strong></div>
				    <?php endif ?>
					
					</div>
							</div>
						</div>
						<div id="footer">
						<p>
						</div>
					</div>
					</body>
					</html>

