<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>TerminalWeb</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="warp">
		<h1 class="title">Terminal<span id="addtitle"></span></h1>
		<div class="terminal">
			<p class="info_terminal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo harum quam doloremque quidem aliquid quibusdam ipsa ea qui ipsum eaque necessitatibus est quae accusamus modi, quisquam quasi! Ad, error enim.</p>
			<form class="mycomand" action="load.php" method="POST"><input type="text" id="input" name="command" autofocus></form><strong id="text_input"></strong>
			<div class="res"></div>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>
</html>