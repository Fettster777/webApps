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
		
			function CalculatePayment(){
			// Get form data
			// $dblAmount = $_POST['txtLoan'];
			//window.alert("Made it this far");
			var strAmount = document.getElementById('txtLoan').value;
			dblAmount = parseFloat(strAmount);
			//window.alert(intYears);
			var strYears = document.getElementById('lstTerm').value;
			//window.alert(intYears);
			intYears = parseFloat(strYears);
			//window.alert(isNaN(intYears));
			var strPercent = document.getElementById('lstInterest').value;
			intPercent = parseFloat(strPercent);
			<?php //echo "<br /> Amount: $dblAmount | Interest: $intPercent | Term: $intYears <br />"; ?>
			// Perform calculations
			var intMonthTerm = intYears * 12;
			var dblMonthRate = intPercent / 100 / 12;
			<?php //echo "<br /> Interest: $dblMonthRate | Term: $intMonthTerm <br />"; ?>
			//var dblPower = Math.pow(1 + dblMonthRate, intMonthTerm);
			var dblPower = CalcPower(1 + dblMonthRate, intMonthTerm);
			var dblPayment = dblAmount * ((dblMonthRate * dblPower) / (dblPower - 1));
			//window.alert("Made this far");
			// Format output
			//var strAmount = Math.round(dblAmount);
			//window.alert(dblPayment);
			var strPayment = Math.round(dblPayment * 100) / 100;
			//$strPayment = number_format($dblPayment,2);
			//window.alert(strPayment);
			strPayment.toString();
			var strResult = "Monthly payment: " + strPayment;
			//window.alert(strResult);
			document.getElementById('output').innerHTML = strResult;
			}
			//window.alert(strResult);
			//create function to do exponentation.  can also use Math.pow(number,power)
			function CalcPower(base,exponent){
				var result = base;
				for (var i=1;i<exponent;i++){
					result *= base;
				}
				return result;
			}
		</script>
	</head>
	<body>
		<h1>Chris Salehi</h1>
        <h2>Payment Calculator</h2>
        <form id="frmPayment" method="post" action="payment_0_proc.php">
			<div>
				Loan amount:
				$
				<input id="txtLoan" type="text" name="txtLoan" size="5" /><br />
				Term:
				<select id="lstTerm" name="lstTerm">
					<?php echo $strTermBlock; ?> 
				</select><br />
				Interest rate:
				<select id="lstInterest" name="lstInterest">
					<?php echo $strRateBlock ?> 
				</select><br />
			</div>
            <p><input type="button" onclick="CalculatePayment();" value="Calculate" /></p>
        </form>
		<p id="output"></p>
		<p>
			<img src="../images/working_.gif" width="69" height="69" alt="Construction logo" />
			Under Construction
		</p>
		<p>[<a href="../">Home</a>]</p>
    </body>
</html>
