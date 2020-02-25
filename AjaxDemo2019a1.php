<!DOCTYPE html>
<html>
	<head>
		<title>Chris Salehi</title>
		<link rel="stylesheet" href="./styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<script type="text/javascript" src="./xmlparse.js"></script>
	</head>
	<body>
<?php include("../includes/header.php") ?>
		<h2 class="centered">
			Simple Ajax Example <br />
			<small>
				(Taken from the Captain's Universe website, no longer available)
			</small>
		</h2>
		<p class="justified">
            Ajax has become a fairly standard approacy to HTML/Javascript, having started 
            back when Google came up with their early <strong>Maps</strong> application. 
            Ajax allows one to write dynamic web applications that get and incorporate 
            external data without reloading/refreshing the page on user interaction. The 
            traditional way of processing HTML forms was to submit them to the server, 
            after which the server processed the data and then sent an entire page as 
            response. The drawback of this method is that the page needs continually to 
            be reloaded in the browser. 
		</p>
		<p class="justified">
            This example demonstrates a simple Ajax page for requesting XML data from a 
            server and displaying the response in an HTML table. The primary file is a simple 
            PHP script, which incorporates an external JavaScript file, which in turn requests 
            some data wrapped in XML and then displays it in the initially empty table. 
		</p>
		<div class="centered">
			<form action="">
				<div><input 
					type="button" name="button" value="Get XML Data" 
					onclick="get_data();" 
				/></div>
			</form>
		</div>
		<h2>Table filled with data requested from the server:</h2>
		<div>
			<table id="salehiTable"></table>
            <br />
		</div>
<?php include("../includes/footer.php") ?>
	</body>
</html>