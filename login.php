<?php
	session_start();
?>

<html>
<head>
	<link rel="stylesheet" type"text/css" href="stylesheet.css" />
	<!-- <style type="text/css">
	label		{width: 100px;}l	
	form		{width: 50%;}
	</style> -->

</head>
<body>
	<div id="bannerhorizontal">
	<h1>Testschirm für Usereingabe</h1>
	<br/>
	</div>
	
	<div id="firmenname">
	</div>
	
	<div id="inhalt">
	<form action="folderauswahl.php" method="post">
		<fieldset>
			<legend>Userangaben</legend>

		
			<p>
			<label>Firma</label>
			<input type="text" size="20" name="firma" value="">
			</p>
			
			<p>
			<label>Typ</label>
			<input type="text" size="20" name="typ" value="">
			</p>
			
			<p>
			<label> </label>
			<input type="submit" name="submit" value="Login">
			</p>
			
		</fieldset>
	</form>
	<br/>
	<form action="typauswahl.php" method="post">
		<fieldset>
			<p>
			<label> </label>
			<input type="submit" name="submit" value="Admin-Zugriff">
			</p>
		</fieldset>
	</form>
	</div>
	


</body>
</html>