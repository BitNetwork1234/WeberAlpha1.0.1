<?php
   include('session.php');
?>
<html">
<body>
<header> 
	<div4 class="wrapper">
		<div9>
      <nav> 
			 <ul>
				  <center><li><a href="index.htm">Home</a></li></center>
				  <center><li><a href="logout.php">Logout</a></li></center>
			 </ul>
		  </nav>
    </div9>		
	</div4>
</header>
   
   <head>
      <title>Welcome</title>
   </head>
   
   <body>
      <center><h1>Welcome <?php echo $login_session; ?></h1></center> 
	  <center><h1>Looking For The CAD:</h1><a href="cad.htm">Click Here</a></center>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   <body>
   <center><h1 href="colour: red;">Admin Tools</h1></center>
   </body>
</html>