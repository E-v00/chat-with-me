<html>
<head>
	<title>access denied</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<header style="position: static;">
		<div class="container">
			<h1><a href="index.html">Chat-With-Me</a></h1>
		</div>
	</header>


	<main style="margin: 300px; padding: 50px; background-color: gray;">
		<h1>You must login first to access chatting <br><br> You will automatically redirected after few seconds</h1>
		<?php header("refresh: 3; url= ../login.php") ?>
	</main>
</body>
</html>