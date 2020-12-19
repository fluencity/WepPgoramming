<?php
	header("Content-type: text/html; charset=utf-8"); 
	session_start(); 
	include('config/config.php');
	$link = @mysqli_connect(HOST,user,PASS) or exit(json_encode('fail to login to sql'));
	mysqli_select_db($link,DBNAME);
	mysqli_set_charset($link,'utf8');



	$name  = $_POST['name'];
	$pass  = $_POST['pass'];
	$pass2 = $_POST['pass2'];
	$email = $_POST['email'];
	if ($pass2 != $pass) {
		echo "<script>alert('do not match！');window.history.go(-1)</script>";
		exit;
	}

	$selSql = "select name from users where name='{$name}'";
	mysqli_query($link, $selSql);
	if (mysqli_affected_rows($link)>0) {
		echo "<script>alert('username exist！');window.history.go(-1)</script>";
		exit;
	}
	$newpass = md5($pass);
	$insSql = "insert into users(email,username,password) values('$email','$name','$newpass')";
	$result =  mysqli_query($link,$insSql);

	if ($result) {
		echo "<script>alert('successful to register');window.location.href='dl.php'</script>";
		exit;
	}else{
		echo "<script>alert('fail to register');window.history.go(-1)</script>";
		exit;
	}
	mysqli_close($link);
	@mysqli_free_result($result);
