<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<style>
		*{margin: 0;padding: 0;}
		body{background:url(images/bg.jpg) no-repeat top center; background-size:cover}
		#main{width: 600px;background:rgba(0,0,0,.5);margin-top: 200px; padding-bottom:50px;color:#fff; border-radius:20px;}
		#head{padding-top: 50px;}
        .btn{width: 300px;height: 40px;line-height: 40px;margin-bottom:20px;padding-left:5px;}
        .tj{width: 100px;height: 40px;line-height: 40px;font-size: 16px;}
        table{margin-left: -80px}
        .tz{color: #fff;font: bold 16px Asia;}
	</style>
</head>
<body>
	<center>
		<div id="main">
			<h2 id="head">login</h2><br>
			<form action="dl_do.php" method="post" name="form" >
				<input type="hidden" name="action" value="dl">
				<table>
					<tr>
						<td align="right">username：</td>
						<td align="left"><input type="text" name="name" class="btn" placeholder="enter username" required></td>
					</tr>
					<tr>
						<td align="right">password：</td>
						<td align="left"><input type="password" name="pass" class="btn" placeholder="enter password" required></td>
					</tr> 
					<tr>
						<td></td>
						<td align="center">
							<input type="submit" class="tj" value="login">
							<input type="reset" class="tj" value="reset">
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="center"><br>
							<a class="tz" href="zc.php">【do not have username?】</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</center>
</body>
</html>
