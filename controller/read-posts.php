<div id="posts" class="container">
	<div class="row">
<?php
	require_once(__DIR__ . "/../model/config.php");

	$query = "SELECT  title, post, DateTime FROM posts ORDER BY id DESC"; //query grabs the title, post, and DateTIme from the table posts in descending order
	$result = $_SESSION["connection"]->query($query); 


	if($result){ //will display if there's information
		while($row = mysqli_fetch_array($result)){ //returns an array that corresponds to the fetched row
			str_split($row["post"], strlen($row["post"]) / 4);
			echo "<div id='read-post' class='post col-xs-8'>";
			echo "<h2>" . $row["title"] . "</h2>"; //displays time
			echo "<p>" .  $row["DateTime"] . "</p>"; //and date
			echo "<p id='post-create'>" . $row["post"] . "</p>"; //displays post
			echo "<br>";
			echo "</div>";
		}
	}

?>

	<!-- </div>
	<div class="row"> -->
		<div id="about" class="col-xs-3">
			Hola
		</div>
	</div>
</div>