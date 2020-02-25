<!DOCTYPE html>
<html>
<head>
<title>Home Page for Chris Salehi</title>
<link rel="stylesheet" href="./styles/styleDefault3.css" />
</head>
<body>

<h1>
<em><font color="green">Chris Salehi</font></em>
</h1>
 <a href="http://www.astate.edu">
  <img src="./images/asulogo.gif" alt="ASU Logo" style="width:150px;height:100px;border:0;">
  <!-- the . is for relevant file -->
  <!-- <img src="http://www.suse1.astate.edu/~salehi_c/images/asulogo.gif" alt="ASU Logo" style="width:150px;height:100px;border:0;"> -->
</a> 
<h2>
Welcome to my website!
</h2>
<pre>
I am a junior CIT major at <a href="http://www.astate.edu">Arkansas State University</a>, and I enjoy playing video games and reading comics. My
favorite video game is the first <a href="https://en.wikipedia.org/wiki/Kingdom_Hearts_(video_game)">Kingdom Hearts</a> on PS2. I have beaten it multiple times. My favorite comic is the 
weekly series <a href="https://en.wikipedia.org/wiki/52_(comics)">"52"</a> published in 2006 by DC Comics. I am also a huge movie buff and enjoy going to the theater and 
watching plenty of movies in my spare time. My favorite movie is the first <a href = "https://www.imdb.com/title/tt0107290/?ref_=nv_sr_1?ref_=nv_sr_1">Jurassic Park</a>.  Jurassic Park is also my 
favorite book which is written by my favorite author, <a href = "https://en.wikipedia.org/wiki/Michael_Crichton">Michael Crichton</a>.

Below you will find a trailer for the <strong>Jurassic Park</strong> film and a picture of my fiance and I at Platform 9&frac34; in London:

<div class="box"><iframe width="450" height="271.5" src="https://www.youtube.com/embed/QWBKEmWWL38">
</iframe></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="./images/harrypotterpic.jpg" alt="Harry Potter Platform" width="259.5" height="274.5">
</pre>
<h2>
Here's what you'll find here (eventually):
</h2>
<ul>
<li>
Personal Pages
<ul>
	<li>
		<a href ="./personal/indexp.php">No Login</a>
	</li>
	<li>
		<a href="./personal/loginPersonal.php">Login version 1</a> (no persistence)
	</li>
	<li>
		<a href="./personal/loginPersonal_2.php">Login version 2</a> (session-based)
	</li>
	<li>
		<a href="./personal/loginPersonal_3.php">Login version 3</a> (cookie-based)
	</li>
</ul>
<li>
WebClass <a href="./exercises">Exercises</a>
</li>
<li>
My <a href="./exercises/guestbook_0.php">GuestBook</a> (please feel free to sign it!)
</li>
</li>
</ul>

<hr>
<p class="footer" align="center">
			If you would like to get a hold of me please email me at
			<br />
			<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a><br /><br />

<?php echo "Today is " . date("l") . " " . date("m-d-Y")?>
<br />
<p align="center">This webpage was accessed on <span id="demo"></span>.</p>

<script>
document.getElementById("demo").innerHTML = document.lastModified;
</script>
</p>
</body>
</html>
