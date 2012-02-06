<?php
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require '../src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '183324428392781',
  'secret' => 'd02702b6a2450a72447243def5127c6d',
  'cookie' => true,
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {


				  
$params = array('scope' => 'friends_work_history');
  $loginUrl = $facebook->getLoginUrl($params);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" media="screen" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="include/style.css" type="text/css" />
<link rel="stylesheet" href="include/vanus.css" type="text/css" />

<script type="text/javascript" src="include/jquery.js"></script>

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
				<div id="recoverfullcontent">
					<div id="recoverform">
					   
						<div id="recoverformheader">
							<h2 class="recoverformheadertitle">Welcome to the Contact Manager</h2>
							<p>This App allows you to quickly find relative and usefull information related to Proffessional contacts that you already have in major social networks.</p>
						</div>
						<div id="recoverformheaderbelow">
							<div id="rfbdata">
							</div>
							<div id="identifyyourblock">
								<div id="identifyyourblock1">
									<div id="socialnetdiv">
										
										    
										
											
											<a id="temp"href="<?php echo $loginUrl; ?>"><img class="socialnet" src="images/facebook.png"></img></a>
										   
										    
										
										<img class="socialnet" src="images/linkedin.png"></img>
									</div>
								</div>
								
								
							</div>
						</div>
						
					  
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
	<p>
	</div>
</div>
</body>
</html>
<?php 
}
include('json.php');
?>
