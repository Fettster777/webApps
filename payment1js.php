<?php
	$intTerm = 2;
	$intMaxTerm = 7;
	$intIncrTerm = 1;
	$dblRateMin = 4;
	$dblRateMax = 15;
	$dblRateIncr = 1;
	while ($intTerm <= $intMaxTerm) {
		$strTermBlock .= "
			<option value=\"$intTerm\">$intTerm years</option> ";
		$intTerm += $intIncrTerm;
	}
	/*
	while ($intTerm <= 7) {
		$strTermBlock .= "
			<option value=\"$intTerm\">$intTerm years</option> ";
		$intTerm += 1;
	}
	*/
	for ($dblRate = $dblRateMin; $dblRate <= $dblRateMax; $dblRate += $dblRateIncr) {
		$strRateBlock .= "
			<option value=\"$dblRate\">$dblRate%</option>";
	}
	/*
	for ($dblRate = 4; $dblRate <= 15; $dblRate += 1) {
		$strRateBlock .= "
			<option value=\"$dblRate\">$dblRate%</option>";
	}
	*/
?>
<!DOCTYPE
    html
    PUBLIC
    "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"
>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Payment Calculator</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<script>
			// Get form data
			dblAmount = document.getElementById('txtLoan').value;
			$intYears = $_POST['lstTerm'];
			$intPercent = $_POST['lstInterest'];
			//echo "<br /> Amount: $dblAmount | Interest: $intPercent | Term: $intYears <br />";
			// Perform calculations
			$intMonthTerm = $intYears * 12;
			$dblMonthRate = $intPercent / 100 / 12;
			echo "<br /> Interest: $dblMonthRate | Term: $intMonthTerm <br />";
			$dblPower = pow(1 + $dblMonthRate, $intMonthTerm);
			$dblPayment = $dblAmount * (($dblMonthRate * $dblPower) / ($dblPower - 1));
			// Format output
			$strAmount = number_format($dblAmount);
			$strPayment = number_format($dblPayment,2);
		</script>
	</head>
	<body>
		<h1>Buddy Bozo</h1>
        <h2>Payment Calculator</h2>
        <form id="frmPayment" method="post" action="payment_0_proc.php">
			<div>
				Loan amount:
				$
				<input id="txtLoan" type="text" name="txtLoan" size="5" /><br />
				Term:
				<select name="lstTerm">
					<?php echo $strTermBlock; ?> 
				</select><br />
				Interest rate:
				<select name="lstInterest">
					<?php echo $strRateBlock ?> 
				</select><br />
			</div>
            <p><input type="submit" value="Calculate Payment" /></p>
        </form>
		<p>
			<img src="../images/working_.gif" width="69" height="69" alt="Construction logo" />
			Under Construction
		</p>
		<p>[<a href="../">Home</a>]</p>
    </body>
</html>
