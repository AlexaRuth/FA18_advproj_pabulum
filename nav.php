<!DOCTYPE HTML>
<html lang "en">
  
<head>
    <meta charset="UTF-8">

<!--STYLES-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/nav.css">

<!--TITLE-->
    <title> MCAD ADVPROJ FALL18</title>

<!--SCRIPTS-->
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
      
</head>
<body>





<!--NAVIGATION-->
	<ul class="topnav">
  <li><a class="active" href="../index.html">pabulum</a></li>
  <li><a href="/pages/facts.html">facts</a></li>
		<li><a href="#!">contact</a></li>
  <li><a href="#!">blog</a></li>
</ul>
	
<button class="open-button" onclick="openForm()">login</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>




</body>
</html>