

<?php 

	session_save_path("/home/users/web/b2742/ipg.doomexcom/cgi-bin/tmp"); 

	session_start();

	$link = mysqli_connect("doomexcom.ipagemysql.com", "foundragon", "123456qwe", "twitter_clone");

			if (mysqli_connect_error()) {
				die("Database Connection Error");
			}

	if ($_GET["function"] == "logout") {
		session_unset($_SESSION['id']);
		session_destroy();
		header('Location: http://foundragon.com/project/foundragon/project/web%20developer%202.0/mvc/');
		exit;
	}

?>