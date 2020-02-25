<html>
	<head>
		<title>Payment Calculator</title>
		<link rel="stylesheet" href="../styles/styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>
	<body>
		<h1>Flybai-Knight Automotive</h1>
		<h2>Loan Payment Calculator</h2>
		<form id="frmPayment" method="post" action="payment_0_proc.php">
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<ul>
					<li>
						Loan amount
						$
						<input id="txtLoan" type="text" name="txtLoan" size="5" /><br />
					</li>
					<li>
						Term
							<select name="lstTerm">
								<option value="2">2 years</option>
								<option value="3">3 years</option>
								<option value="4">4 years</option>
								<option value="5">5 years</option>
								<option value="6">6 years</option>
								<option value="7">7 years</option>
							</select><br />
					</li>
					<li>
						Interest rate
						<select name="lstInterest">
							<option value="4">4%</option>
							<option value="5">5%</option>
							<option value="6">6%</option>
							<option value="7">7%</option>
							<option value="8">8%</option>
							<option value="9">9%</option>
							<option value="10">10%</option>
							<option value="11">11%</option>
							<option value="12">12%</option>
							<option value="13">13%</option>
							<option value="14">14%</option>
							<option value="15">15%</option>
						</select><br />
					</li>
				</ul>
			</p>
			<p>
				&nbsp;&nbsp;&nbsp;Outputs:
				<br /><br />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" value="Calculate Monthly Payment" />
			</p>
		</form>
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