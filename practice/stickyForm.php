<html>

	<body>

	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">

	 

	<p><b>Your Name : </b><input type="text" name="name" value="<?php if(isset($_GET['name'])) echo $_GET['name'];?>" /></p>

	 

	<p><b>Your Description : </b><br />

	<textarea name="description" cols="3" rows="14"><?php if(isset($_GET['description'])) echo $_GET['description'];?></textarea>

	 

	<p><input type="submit" name="submit" value="Submit" /></p>

	</form>

	</body>

	</html>