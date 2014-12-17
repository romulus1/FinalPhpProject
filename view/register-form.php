<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/header.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path ."controller/create-user.php"; ?>" > <!-- users register page -->
	<div>
		<label for="email">Email: </label> <!-- Label for email -->
		<input type="text" name="email" />
	</div>

	<div>
		<label for="username">Username: </label> <!-- Label for username -->
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label> <!-- Label for password-->
		<input type="password" name="password" />
	</div>

	<div>
		<button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"> Submit </button> <!-- submits the information on the page -->
	</div>
</form>