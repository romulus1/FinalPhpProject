<?php
	require_once(__DIR__ . "/../model/config.php"); //uses code from config.php
	require_once(__DIR__ . "/../controller/login-verify.php");
?>
<div class="fluid-container">
	<div class="row">
		<div class="col-xs-12">
			<nav>
				<ul>
				
					<?php
						if(authenticateUser()) {
							echo "<li><a href=" . "$path" . "post.php" . ">Blog Post Form</a></li>";  /*creates a link to post.php through index.php*/
						}
					
						if(!authenticateUser()){
							echo"<li><a href=" . "$path" . "login.php" . ">Login</a></li>";
						}
					
						if(authenticateUser()){
							echo "<li><a href=" . "$path" . "logout.php" . ">Logout</a><li>";
						}
                                                
						if(!authenticateUser()){
							echo "<li><a href=" . "$path" . "register.php" . ">Register</a><li>";
						}
					?>
				</ul>	
			</nav>
		</div>
	</div>
</div>