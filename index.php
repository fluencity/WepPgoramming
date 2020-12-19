<?php
	error_reporting(0);
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>home page</title> 
<style>
body{background:url(images/bg.jpg) no-repeat top center; background-size:cover}
	#header{max-width: 1200px}
	.dl{padding:5px 10px;border: solid 1px #999;text-decoration: none;font-weight: bold; border-radius:5px;color: #333;}
	.exit{margin-left: 10px;}
	#content{max-width: 1024px; overflow: hidden; line-height:200%}
	#content p{ overflow: hidden;}
	.fr{float: right;}
	.info{float: left;font-size: 16px;text-align: left;}
	.name{font-size: 14px;}
	.time{font-size: 14px;}
	.fenye{max-width: 1024px;}
	.page{color: #2767e0;text-decoration:none;}
</style>
</head>
<body>
	<center>
	<div id="header">
			<h1>Slam Dunk</h1><br /><br />
			<div id="search">
				<form action="tc_do.php" method="post">
	                <input type="hidden" value="exit"  name="action"/>
					 <?php            
		            if(isset($_SESSION["admin"])) {
		            	echo "welcome, ".$_SESSION["admin"]['name'];
		            	echo '<input name="exit"  value="logout " class="exit" type="submit">';
		            }else{
		            	echo '<a class="dl" href="dl.php">login</a> | <a class="dl" href="zc.php">register</a>';
	            	}
		         ?>	         
				</form>
			</div>
			<br />
			
		<hr />
	</div>
	</center>
	<center>
		<div id="content">
			
			
		Slam Dunk (Japanese: スラムダンク, Hepburn: Suramu Danku) is a Japanese sports manga series written and illustrated by Takehiko Inoue about a basketball team from Shōhoku High School in the Shōnan area. It was serialized in Weekly Shōnen Jump from October 1990 to June 1996, with the chapters collected into 31 tankōbon volumes by Shueisha.
		
		</div>
		</center>
	
</body>
</html>