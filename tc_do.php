<?php
	header("Content-type: text/html; charset=utf-8"); 
	session_start(); 
	unset($_SESSION['admin']);
	echo "<script>alert('seccessful！');window.location.href='index.php'</script>";
	
