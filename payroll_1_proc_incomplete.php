<?php
	//Initatilize variables and define constants
	define (TAX_MARRIED, 0.10);
	define (TAX_SINGLE,0.20);
	$strMessage = "";
	$strHost = "localhost";
	$strAdmin = "scrooge_e";
	$strPass = "eben$777";
	$strDBase = "DataFKI_scrooge";
	// get form data
	$intEMP = $_POST['lstEmployee'];
	$intHours = $_POST['lstHours'];
	//echo "<p>$intEMP</p>;
	//Build query
	
	
	
	$strEmployee = $_POST['txtEmployee'];
	$strMarried = $_POST['optMarried'];
	$dblWage = $_POST['lstWage'];
	$intHours = $_POST['lstHours'];
	$dblTaxMarried = 0.10;
	$dblTaxSingle = 0.20;
	$dblTaxPercent = 0;
	$strMessage = "";

	//Perfor Calculations
	$dblGrossPay = $intHours * $dblWage;
	if	($strMarried == "Yes"){
		$dblTax = $dblGrossPay * $dblTaxMarried;
		$dblTaxPercent = $dblTaxMarried * 100;
		}		
	else{
		$dblTax = $dblGrossPay * $dblTaxSingle;
		$dblTaxPercent = $dblTaxSingle * 100;
		}
	$dblNetPay = $dblGrossPay - $dblTax;
	//Form output
	$strNetPay = number_format($dblNetPay,2);
	$strWage = number_format($dblWage,2);
	$strMessage .= "Net pay for <strong>$strName</strong> is $<strong>$strNetPay</strong>, ";
	$strMessage .= "based upon <strong>$intHours</strong> hours worked, a wage of ";
	$strMessage .= "$<strong>$strWage</strong> per hour, and a tax rate of ";
	$strMessage .= "<strong>$dblTaxPercent</strong>%";
?>
<!DOCTYPE html>
<hmtl>
	<head>
		<title>Simple Payroll Calculator</title>
		<meta http-equiv="Content-Type" content="text/html:charset=utf-8" />
	</head>
	<body>
		<h1>Flybai-Knight Automotive</h1>
		<h2>Payroll Proessing -- Version A</h2>
			<p>
				<img src="http://www.mentorpl.org/wp-content/uploads/2012/06/money-clip-art-money-clipart-42.jpg" alt="Money" style="width:150px;height:100px;border:0;">
				<br />
				<br />
				<?php echo($strMessage); ?>
			</p>
			<p class="footer" align="center">
				[<a href="../index.php">Home</a>]
			</p>
			<hr />
			<p class="footer" align="center">
				For further information, please email us at
				<br />
				<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
			</p>
	</body>
</html>
	