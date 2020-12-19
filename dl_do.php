<?php
	header("Content-type: text/html; charset=utf-8"); 
	session_start(); 
	include('config/config.php');
	$link = @mysqli_connect(HOST,user,PASS) or exit(json_encode('fail to login to sql'));
	mysqli_select_db($link,DBNAME);
	mysqli_set_charset($link,'utf8');

	$name = $_POST['name'];
	$pass = $_POST['pass'];
	if (!$name) {
		echo "<script>alert('please enter your username');window.history.go(-1)</script>";
		exit;
	}
	if (!$pass) {
		echo "<script>alert('please enter your password');window.history.go(-1)</script>";
		exit;
	}
	$sql = "select * from users where username='{$name}'";
	$result = mysqli_query($link,$sql);	
	
	if($result && mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);	
		if(md5($pass) != $row['password']){
			echo "<script>alert('wrong password');window.history.go(-1)</script>";
			exit;
		}
		$_SESSION['admin'] = $row;
		echo "<script>window.location.href='index.php'</script>";
		exit;
	}else{
		echo "<script>alert('username do not exist');window.history.go(-1)</script>";
		exit;
	}
		

	mysqli_close($link);
	@mysqli_free_result($result);