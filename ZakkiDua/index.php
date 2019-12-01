<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="dashboard.css">
	<title>Dashboard</title>
</head>

<body>
	<nav class="navbar">
		<div class="foto-profil">
			<img src="" alt="">

		</div>
		<p></p>
		<ul>
			<a href="index.php?page=dashboard">
				<li>Dashboard</li>
			</a>
			<a href="index.php?page=new_project">
				<li>Input Data</li>
			</a>
			<a href="index.php?page=on_work">
				<li>Chart</li>
			</a>
			<a href="index.php?page=completed_project">
				<li>About Me</li>
			</a>
			<a href="index.php?page=revision_project">
				<li>Log Out</li>
			</a>
		</ul>
	</nav>
	<div class="main-content">
		<?php
		define('index', true);

		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = "dashboard";
		}

		require_once("apps.php");
		require_once $page . ".php";

		?>
	</div>

</body>

</html>