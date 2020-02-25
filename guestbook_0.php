<DOCTYPE! html>
<html>
	<head>
		<title>GuestBook for Chris Salehi</title>
		<link rel="stylesheet" href="../styles/styleDefault.css" />
	</head>
	<body>
		<h1>Chris Salehi</h1>
		<h2>GuestBook Registration</h2>
		
		<form id="frmGuest" method="post" action="guestbook_0_proc.php">
			<ul>
				<li>
				Name:
				<input type="text" name="txtName" value="" />
				</li>
				<li>
				Courses Completed: <br />
				<input type="checkbox" name="chkEng" />
				ENG 1013 <br />
				<input type="checkbox" name="chkMath" />
				MATH 2143 <br />
				<input type="checkbox" name="chkMicro" />
				CIT 1503
				</li>
				<li>
				Gender:
				<input type="radio" name="optGender" value="Female" />
				Female
				<input type="radio" name="optGender" value="Male" />
				Male
				</li>
				<li>
				Age:
				<select name="lstStatus">
					<option value="xxx">Choose . . .</option>
					<option value="FR">First Year</option>
					<option value="SO">Sophomore</option>
					<option value="Other">Other</option>
				</select>
				</li>
			</ul>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="cmdRegister" value="Register Now" />
			</p>
		</form>
		<p>
			<img src="../images/working_.gif" width="69" height="69" alt="Construction logo" />
			Under Construction
		</p>
		<p class="footer" align="center">[<a href="../">Home</a>]</p>
		<hr />
		<p class="footer" align="center">
			If you would like to get a hold of me please email me at
			<br />
			<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
		</p>
	</body>
</html>
				
		