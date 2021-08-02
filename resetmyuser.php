<?php
  //This is designed to work from the /wp-content/uploads folder.
  require 'wp-blog-header.php';
  global $wpdb;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome - Project by Anthony Rossbach</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <style>
      html{
        height:100%;
        background: rgb(30,30,30);
      }
      body{
        display: block;
        font-weight: 300;
        background: rgb(30,30,30);
      	color: rgb(120,120,120);
        font-size: 17px;
        line-height: 1.37;
        font-weight:400;
        font-smooth: always;
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
      }
      a, a:link, a:visited {
      	transform: translate3d(0, 0, 0);
      	-webkit-transform: translate3d(0, 0, 0);
      	-moz-transform: translate3d(0, 0, 0);
      	-o-transform: translate3d(0, 0, 0);
      	transition: ease-in-out 0.1s;
      	-webkit-transition: ease-in-out 0.1s;
      	-moz-transition: ease-in-out 0.1s;
      	-o-transition: ease-in-out 0.1s;
      	position: relative;
        color: rgb(129,191,78);
      }

      a:hover, a:active {
      	text-decoration: none !important;
        color: rgba(129,191,78, 0.7);
      }
      h1, h2, h3{
        font-weight: 400;
        color: rgb(255,255,255);
        margin-top:0px;
        margin-bottom:15px;
      }
      pagename{
        display:block;
        margin: 0px auto;
        margin-top:70px;
        text-align:center;
        max-width:600px;
        padding:10px;
        font-size:28px;
        font-weight:600;
        color: rgb(255,255,255);
      }
      content{
        display:block;
        margin: 0px auto;
        margin-top:20px;
        text-align:left;
        max-width:600px;
        padding:10px;
        border-radius:9px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
        -webkit-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
        -moz-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
        background:rgb(40,40,40);
      }
      credits{
        display:block;
        margin: 0px auto;
        margin-top:20px;
        text-align:center;
        max-width:600px;
        padding:10px;
      }
      warning{
        display:block;
        margin: 0px auto;
        margin-top:20px;
        text-align:center;
        max-width:600px;
        padding:10px;
        font-size:14px;
      }
      .block{
  			border-radius: 9px;
  			background:rgb(70,70,70);
        color:rgb(255,255,255);
        padding:10px;
        margin-bottom:10px;
      }
      textarea {
      	background: #f7f7f7;
      	border: 0px solid #f2f2f2;
      	border: none;
      	border-radius: 9px;
      	color: #5a5656;
      	font-family: inherit;
      	font-size: 14px;
      	outline: none;
      	overflow: hidden;
      	padding: 10px;
      	padding-top: 15px;
      	padding-bottom: 15px;
      	width: auto;
      	margin-top: 5px;
      	margin-bottom: 5px;
      	-webkit-appearance: none;
      	box-sizing: border-box;
      	-moz-box-sizing: border-box;
      	-webkit-box-sizing: border-box;
      	resize: none;
      	-webkit-transition: all 200ms ease-in-out;
      	-moz-transition: all 200ms ease-in-out;
      	-o-transition: all 200ms ease-in-out;
      	transition: all 200ms ease-in-out;
      }
  		textarea:hover, textarea:focus {
  			box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  			-webkit-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  			-moz-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  		}
      input,
      input[type="text"],
      input[type="password"] {
      	background: #e5e5e5;
      	border: none;
      	border-radius: 9px;
      	color: #5a5656;
      	font-family: inherit;
      	font-size: 14px;
      	outline: none;
      	padding: 10px;
      	padding-top: 15px;
      	padding-bottom: 15px;
      	max-width: 300px;
      	width: 100%;
      	margin-top: 5px;
      	margin-bottom: 5px;
      	-webkit-appearance: none;
      	box-sizing: border-box;
      	-moz-box-sizing: border-box;
      	-webkit-box-sizing: border-box;
      	-webkit-transition: all 200ms ease-in-out;
      	-moz-transition: all 200ms ease-in-out;
      	-o-transition: all 200ms ease-in-out;
      	transition: all 200ms ease-in-out;
      }
      input:focus,
  		input:hover,
      input[type="text"]:focus,
  		input[type="text"]:hover,
      input[type="password"]:focus
  		input[type="password"]:hover {
      	outline: none;
  			box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  			-webkit-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  			-moz-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
      }
  		input[type=file]{
  			display: inline-block;
  		}
      button,
      input[type="button"],
      input[type="submit"] {
      	background-color: rgb(46, 204, 113);
      	border: none;
      	border-radius: 9px;
      	color: #f4f4f4;
      	cursor: pointer;
      	font-family: inherit;
  			font-weight: 600;
      	text-transform: uppercase;
      	outline: none;
      	padding: 10px;
      	padding-top: 15px;
      	padding-bottom: 15px;
  			width: 100%;
      	max-width: 300px;
      	margin-top: 5px;
      	margin-bottom: 5px;
      	-webkit-appearance: none;
      	box-sizing: border-box;
      	-moz-box-sizing: border-box;
      	-webkit-box-sizing: border-box;
      	-webkit-transition: all 200ms ease-in-out;
      	-moz-transition: all 200ms ease-in-out;
      	-o-transition: all 200ms ease-in-out;
      	transition: all 200ms ease-in-out;
      }
      button:hover,
      input[type="button"]:hover,
      input[type="submit"]:hover {
      	background-color: rgba(46, 204, 113, 0.8);
  			box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  			-webkit-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  			-moz-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
      }
  		select {
  			-webkit-appearance: button;
      	-moz-appearance: button;
      	background: #e5e5e5;
      	border: none;
      	border-radius: 9px;
      	color: #5a5656;
      	font-family: inherit;
      	font-size: 14px;
      	outline: none;
      	padding: 10px;
      	padding-top: 15px;
      	padding-bottom: 15px;
      	max-width: 300px;
      	width: 100%;
      	margin-top: 5px;
      	margin-bottom: 5px;
      	box-sizing: border-box;
      	-moz-box-sizing: border-box;
      	-webkit-box-sizing: border-box;
      	-webkit-transition: all 200ms ease-in-out;
      	-moz-transition: all 200ms ease-in-out;
      	-o-transition: all 200ms ease-in-out;
      	transition: all 200ms ease-in-out;
      }
      select:focus
  		select:hover {
      	outline: none;
  			box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  			-webkit-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
  			-moz-box-shadow: 0 4px 10px rgba(0, 0, 0, .08);
      }
      [placeholder]::-webkit-input-placeholder {
      	color: inherit;
      }
      [placeholder]:focus::-webkit-input-placeholder {
      	-webkit-transition: all 0.3s ease-in-out;
      	-moz-transition: all 0.3s ease-in-out;
      	-ms-transition: all 0.3s ease-in-out;
      	-o-transition: all 0.3s ease-in-out;
      	transition: all 0.3s ease-in-out;
      	-webkit-transform: translate(300px, 0);
      	-moz-transform: translate(300px, 0);
      	-ms-transform: translate(300px, 0);
      	-o-transform: translate(300px, 0);
      	transform: translate(300px, 0);
      	opacity: 0;
      }
      textarea:focus {
      	outline: none;
      	border: 0px solid #4D9BD6 !important;
  			font-weight: 600;
      }
      .message_error,
  		.message_warning,
  		.message_good,
  		.message_normal,
  		.message_grey{
  			border-radius: 9px;
  			padding: 10px;
  			border: 0px;
  			max-width: 1000px;
  			font-weight: 600;
  			margin: 0px auto;
  			color:#ffffff;
  			margin-top: 0px;
  			margin-bottom:0px;
  			text-align:center;
  		}
  		.message_error strong,
  		.message_warning strong,
  		.message_good strong,
  		.message_normal strong,
  		.message_grey strong{
  			text-decoration: underline;
  		}
  		.message_good {
  			background: rgb(46, 204, 113);
  		}
  		.message_error {
  			background: #e74c3c;
  		}
  		.message_warning {
  			background: #f1c40f;
  		}
  		.message_normal {
  			background: rgb(34, 130, 248);
  		}
  		.message_grey {
  			background: rgb(240,240,240);
  		}
    </style>
  </head>
  <body>
    <pagename>Wordpress user reset</pagename>
    <content>
      <?php
        if (isset($_POST['submit'])){
          $user_login=sanitize_user($_POST['login']);
          $user_pass=$_POST['password'];
          $resetcheck=true;
          if (empty($user_login)){
            $resetcheck=false;
            echo "<div class='message_error'>The user field cant be empty for the reset to work</div>";
          }
          if (empty($user_pass)){
            $resetcheck=false;
            echo "<div class='message_error'>The new password field cant be empty for the reset to work</div>";
          }
          if ($user_login!=$wpdb->get_var("SELECT user_login FROM $wpdb->users WHERE user_login = '$user_login' LIMIT 1")){
            $resetcheck=false;
            echo "<div class='message_error'>Sorry we cant find a user that matches</div>";
          }

          if ($resetcheck==true){
            $wpdb->query("UPDATE $wpdb->users SET user_pass = MD5('$user_pass'), user_activation_key = '' WHERE user_login = '$user_login'");
            echo "<div class='message_good'>User reset is done</div>";
          }

          unlink('resetmyuser.php');
        }
      ?>
      <p>This script is based on a older reset script made for Wordpress, this will update the password of any user entered, it will only work once and then will be removed from the server. Once you hit submit even with wrong info this script will be deleted.</p>

      <form action="resetmyuser.php" method="post" id="post" style="text-align:center;">
        <input type="text" class="input" name="login" placeholder="user">
        <input type="password" class="input" name="password" placeholder="password">
        <br><br>
        <input type="submit" name="submit" class="button_submit" value="Update Password">
      </form>
    </content>
    <credits>Project by Anthony Lee on <a href='https://twitter.com/justanthonylee'>Twitter</a>, and <a href='https://github.com/anthonyrossbach'>Github</a>.</credits><warning>Your use of this script is at your sole risk. All code is provided "as -is", without any warranty, whether express or implied, of its accuracy, completeness. Further, I shall not be liable for any damages you may sustain by using this script, whether direct, indirect, special, incidental or consequential.</warning>
  </body>
</html>
