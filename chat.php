<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <script>
        $(document).ready(function(){
            $('#chat').keyup(function(e){
                if(e.keyCode == 13){
                    var chat = $('#chat').val();
                    $.ajax({
                        type:'POST',
                        url:'pages/insertchat.php',
                        data:{chat:chat},
                        success:function(){
                            $('#chatbox').load('pages/displaychat.php');
                            $('#chat').val("");
                        }
                    });
                }
            });
            
            setInterval(function(){
                $('#chatbox').load('pages/displaychat.php');
            },350);
            
            $('#chatbox').load('pages/displaychat.php');

        });
    </script>
</head>
<body bgcolor="gray" >
<?php
session_start();
if(empty($_SESSION['username'])){
	header("location: pages/access.php");
}

?>
	<header style="position: static;">
		<div class="container">
			<h1><a href="index.html">Chat-With-Me</a></h1>
			 <ul>
                <li><button onclick="goto('pages/logout.php')">Log Out</button></li>
                <li style="padding-top: 35px;">User : <?php echo $_SESSION['username']; ?></li>
                <li><button onclick="openPanel()">Control Panel</button></li>
            </ul>
		</div>
	</header>


	<main class="main-chat">
		<div id="chatbox" ></div>
        <div style="width: 50%; margin: auto;">
	       <textarea name="chat" id="chat"></textarea>
        </div>
	</main>



    <div id="control-panel" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closePanel()">&times;</a>
      <div class="change">
        <h2>Font Size</h2>
        <select onchange="changeSize(this);">
          <option>xx-small</option>
          <option>x-small</option>
          <option>small</option>
          <option>medium</option>
          <option>large</option>
          <option>x-large</option>
          <option>xx-large</option>
          <option>100%</option>
      </select></div>

        <div class="change">
        <h2>Font Color</h2>
        <select onchange="changeColor(this);">
          <option>black</option>
          <option>MediumVioletRed</option>
          <option>OrangeRed</option>
          <option>green</option>
          <option>Teal</option>
          <option>lightblue</option>
          <option>GreenYellow</option>
          <option>HotPink</optioin>
      </select></div>
    </div>


</body>
</html>

