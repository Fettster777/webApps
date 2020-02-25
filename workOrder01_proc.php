<?php

	$strName = $_POST['txtName'];

	$strPhone = $_POST['txtPhone'];

	$strPlatform = $_POST['optPlatform'];

	$strHdwe = $_POST['chkHdwe'];

	$strSftwe = $_POST['chkSftwe'];

	$strUnknown = $_POST['ChkUnknown'];
	
	$strProblem = $_POST['txtProblem'];

?>

<!DOCTYPE html>

<html>

	<head>

		<title>CIT 3353 Sample Work Order Form</title>
		<link rel="stylesheet" href="../styles/styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	</head>

	<body>

		<h1 align="center"><font color="green"><em>Chris Salehi</em></font></h1>

		<h3 align="center"><em>Technology Services Work Order</em></h3>

		<p>Thanks for reporting your problem, <strong><em><?php print($strName); ?></em></strong>. Please stay close to your phone, and we will get back to you ASAP (or never, whichever happens later). 

		<ul>

            <li>Name: <?php print($strName); ?></li>

            <li>Phone: <?php print($strPhone); ?></li>

            <li>Platform: <?php print($strPlatform); ?></li>

            <li>Hardware: <?php print($strHdwe); ?></li>

            <li>Software: <?php print($strSftwe); ?></li>
			
			<li>Unknown: <?php print($strUnknown); ?></li>

            <li>Problem: <?php print($strProblem); ?></li>

		</ul>

		<p class="footer" align="center">
            [<a href="../index.php">Home</a>]
		</p>
        <p class="footer" align="center">
		For further information, please email us at
		<br />
		<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
		</p>

	</body>

</html>
