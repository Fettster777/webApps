<?php
//variables
$strHost = "localhost";
$strUser = "scrooge_e";
$strPass = "eben$777";
$strDB = "HENRY09";
$strPriceOptions = "";
$intPriceMin = 10;
$intPricemax = 30;
$dblPriceIncrement = 2.5;
//populate dropdown list
for ($i=$intPriceMin; $i<=$intPricemax; $i+=$dblPriceIncrement) {
	$strPriceOptions .= "<option value=\"$i\">$" . money_format("%n",$i) . "</option> \n";
}
?>
<!DOCTYPE hmtl>
<html>
	<head>
		<title>Chris Books Listing: The Form</title>
		<!-- Link style sheet link rel="stylesheet" href="../styles/styleDefault.css" /> -->
		<link rel="stylesheet" href="../styles/styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script type="text/javascript">
			function Start(){
					document.getElementByID("txtName").focus();
			}
	</script>
	</head>
	<body onload="Star();">
<?php //include ("../includes/header_henry.php"); ?>
		<h1>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Chris Books <br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="../images/hBooks01.gif" alt="Book logo" width="68" height="60" />
		</h1>
		<h2> Book listing by price: </h2>
		<form action="henryBooks_0_proc.php" method="post" id="frmSale">
			<ul>
				<li>Your name: <input size="30" name="txtName" id="txtName" /></li>
				<li>
						Maximum price:
						<select name="lstPrice">
							<option value="xxx">Choose . . . </option>
				<?php echo $strPriceOptions; ?>
						</select>
				</li>
			</ul>
			<p class="centered">
				<input type="submit" name="cmdSubmit" value="See What's Available" />
			</p>
		</form>
<?php //include ("../includes/footer_henry.php"); ?>
		<br />&nbsp;
		<hr />
		<p><small>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>Chris Books</strong>
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			P.O. Box 130 &bull; State University, AR 72467
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			(870) 972-3416
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			[<?php echo "$strDB Database";?>]
		</small></p>
		<p class="footer" align="center">
			[<a href="../index.php">Home</a>]
		</p>
		<p class="footer" align="center">
			For further information, please email us at
			<br />
			<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
		</p>
	<body>
<html>
		