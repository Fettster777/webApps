<?php
	$strStudentName = $_POST['txtName'];
	$strSex = $_POST['optGender'];
	$strEng = $_POST['chkEng'];
	$strMath = $_POST['chkMath'];
	$strMicro = $_POST['chkMicro'];
	$strClass = $_POST['lstStatus'];
?>
<!DOCTYPE
    html
    PUBLIC
    "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"
>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Guestbook Confirmation</title>
		<link rel="stylesheet" href="../styles/styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>
	<body>
		<h1>Chris Salehi</h1>
		<h2>GuestBook Confirmation</h2>
		<ul>
            <li>Name: <?php print($strStudentName); ?></li>
            <li>Gender: <?php print($strSex); ?></li>
            <li>English: <?php print($strEng); ?></li>
            <li>Math: <?php print($strMath); ?></li>
            <li>MicroApps: <?php print($strMicro); ?></li>
            <li>Status: <?php print($strClass); ?></li>
		</ul>
		<p>[<a href="../">Home</a>]</p>
	</body>
</html>
