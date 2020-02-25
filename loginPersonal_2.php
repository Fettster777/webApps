<?php
session_start()
?>
<?php
if (isset($_SESSION['salehiLoggedIn'])){
	header('Location: ./indexp_2.php');
	}
if(isset($_POST['cmdSubmit'])){
	$strPassword = $_POST['txtPass'];
	
		if($strPassword == 'chri$649'){
			$_SESSION["salehiLoggedIn"] = $strPassword;
			echo '<script type="text/javascript"> window.open("./indexp_2.php","_self");</script>';
		}
else{
	echo('Bad Password, Please Try Again');
}}
?>


<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="../styles/styleDefault.css" />
	</head>
	<body>
		<h2>My Personal Web Space</h2>
		<form action="" id="frmLogin" method="post">
			<p class="centered">
				Please enter the password: 
				<input name="txtPass" type="password" id="txtPass" />
				<input name="cmdSubmit" type="submit" id="cmdSubmit" value="Access My Personal Web Space" />
			</p>
		</form>
        <p class="footer" align="center">
            [<a href="../index.php">Home</a>]
        </p>
		<hr />
		<p class="footer" align="center">
			If you would like to get a hold of me, please email me at
			<br />
			<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
		</p>
	</body>
</html>