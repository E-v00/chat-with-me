<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>

	<header style="position: static;">
		<div class="container">
			<h1><a href="index.html">Chat-With-Me</a></h1>
			<ul>
				<li><button onclick="goto('login.php')">login</button></li>
				<li><button onclick="goto('register.php')">register</button></li>
				<li><button onclick="goto('chat.php')">chat</button></li>
			</ul>
		</div>
	</header>

	<div class="container">
		<main class="main-submit">
			
				<form action="pages/insertuser.php" method="post">
					<input type="text" name="username" placeholder="Enter Username" required>
					<input type="text" name="email" id="email" placeholder="Enter Email"required pattern="[a-z.]*[@]\bgmail.com">
					<input type="password" name="password" placeholder="Enter Password" required>
					<input type="submit" value="Submit" name="register">				
				</form>
			
		</main>	
	</div>
</body>
</html>