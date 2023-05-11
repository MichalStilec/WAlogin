<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Form</title>
</head>
<body>
	<?--https://www.baeldung.com/cs/http-get-vs-post--?>
	<form action="loginn/logme.php" method="POST">
	  <div>
	    <label for="say">Name</label>
	    <input name="name"/>
	  </div>
	  <div>
	    <label for="to">Password</label>
	    <input name="password" type="password" />
	  </div>
	  <div>
	    <button>Send my greetings</button>
	  </div>
	</form>
</body>
</html>