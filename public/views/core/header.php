<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <title>Hello, world!</title>
  	</head>
	<body>
		<?php echo $_SESSION['site'] ?>
	  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    		<div class="navbar-nav">
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/index.php" ? "active" : "" ?>" href="/">Home</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/authors.php" ? "active" : "" ?>" href="/views/authors">Authors</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/courses.php" ? "active" : "" ?>" href="/courses">Courses</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/aboutus.php" ? "active" : "" ?>" href="/about">About Us</a>
					<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/login.php" ? "active" : "" ?>" href="/login.php">Login</a>
	    		</div>
	  		</div>
		</nav>