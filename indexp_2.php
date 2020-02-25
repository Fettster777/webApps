<?php   session_start();  ?>


<DOCTYPE! html>
<html>
	<head>
		<title>Interests Page for Chris Salehi</title>
		<link rel="stylesheet" href="../styles/styleDefault.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	</head>
	<body>
		<h1>
			Chris Salehi<br /><br />
			<a href="http://www.astate.edu" title="ASU Home Page">
			     <img
                    src="http://www.suse1.astate.edu/~salehi_c/images/LogoASU.gif" alt="ASU Logo" width="70" height="48" alt="ASU"
                 />
            </a>
		</h1>
		<h2>My Personal Web Space</h2>
		<p class="indented">

			Here you'll find a variety of information about me.&nbsp; 
			Of course, since this is a public page available through the 
			Worldwide Web, you can't count on the information being too personal 
			and/or very accurate; in other words (as quoted from <em>
			Dragnet</em>), some of the &quot;names have been changed to protect the 
			innocent.&quot;&nbsp;
			Hence, you'll likely find more correct data by going to the
			<a href="http://www.google.com">Google</a> website!
		</p>
		<p class="indented">
			I was born in Nebraska and started playing video
			games when introduced to a Game Boy which I received for Christmas.&nbsp; I have only 1 sister.
			&nbsp; 
			I spent most of my childhood in Omaha, NE but moved to Arkansas in 2000.&nbsp; After graduating high school
			I decided to attend Arkansas State University.
		</p>
		<p class="indented">
			My father is an engineer and my mother is a retired teacher.&nbsp; 
		</p>
		<p class="indented">
			My fiance, Kirstyn Wyatt, is a Spanish teacher at Brookland Junior High.  We are getting married in December 2019. 
			
			Below is a picture of us in France in front of Notre Dame and a picture of us in front of Alcázar de Segovia in Spain.
		</p>
		<br />
		<img src="../images/chris_kirt.gif" alt="Chris and Kirt" width="300" height="200">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/segovia.jpg" alt="Segovia castle" width="275" height="200">
		<h2>A Brief Listing of My Interests</h2>
		<ul>
		  <li><strong>Favorite classes</strong>
		    <ul>
		      <li>Database Management</li>
		      <li>Programming</li>
			  <li>Telecommunications</li>
		    </ul>
			<br />
		  </li>
		  <li><strong>Hobbies</strong>
		    <ul>
		      <li>Video Games</li>
		      <li>Comics</li>
		      <li>Movies</li>
		    </ul>
			<br />
		  </li>
		  <li><strong>Sports</strong>
		    <ul>
		      <li>Football</li>
		      <li>Soccer</li>
		      <li>Basketball</li>
		    </ul>
		  </li>
		</ul>
		<a href='logout.php'>Logout</a>
  <p class="footer" align="center">[<a href="../">Home</a>]</p>
		<hr />
		<p class="footer" align="center">
			If you would like to get a hold of me please email me at
			<br />
			<a href="mailto:christopher.salehi@smail.astate.edu">christopher.salehi@smail.astate.edu</a>
		</p>
	</body>
</html>

<?php
      if(!isset($_SESSION['salehiLoggedIn'])) // If session is not set then redirect to Login Page
       {
           header("Location:./loginPersonal_2.php");  
       }

          echo $_SESSION['salehiLoggedIn'];

          echo "Login Success";
?>