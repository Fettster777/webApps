<?php
	$dblPayRate = doubleval($_POST['lstPayRate']);
	$strFirstName = $_POST['txtFirstName'];
	$intHoursWorked = intval($_POST['txtHoursWorked'];
	define("TAXRATE",0.25);
	$dblGrossPay = $dblPayRate * $intHoursWorked;
	$dblTax = $dblGrossPay * TAXRATE;
	$dblNetPay = $dblGrossPay - $dblTax;
	$intTaxRate = TAXRATE * 100;
?>
<html>
	<body>
		<p><strong><?php echo($strFirstName) ?></strong>, your pay for this period is <strong>$<?php echo($dblNetPay) ?></strong>, based upon <strong><?php echo($intHoursWorked) ?>
			</strong> hours worked at <strong>$<?php echo($dblPayRate) ?></strong> per hour and a tax rate of <strong><?php echo($intTaxRate) ?>%</strong>.
		</p>
	</body>
</html>
	