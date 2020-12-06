<?php

include 'includes/art-config.inc.php';

?>

<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="css/semantic.js"></script>
        <script src="js/misc.js"></script>
    
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    
</head>
<body >
    
	<?php include 'includes/art-header.inc.php'; ?>
    
	<main class="ui segment doubling stackable grid container">
	    <section class="twelve wide column">
	        <h1 class="ui header">Favourites</h1>
	        <table class="ui grey table">
	        	<thead>
		        	<tr>
		        		<th>Image</th>
		        		<th>Title</th>
		        		<th>Action</th>
		        	</tr>
	        	</thead>
	        	<tbody>
	        		<?php
	        			if(isset($_SESSION['favorites_list']) && count($_SESSION['favorites_list']) > 0) {
	        				foreach ($_SESSION['favorites_list'] as $item) {
	        					echo '<tr>
					        		<td><img src="images/art/works/small-square/'. $item["ImageFileName"] .'.jpg" class="image" ></td>
					        		<td><a href="single-painting.php?id='. $item["PaintingID"] .'">'. $item["Title"] .'</a></td>
					        		<td><a href="remove-favourites.php?id='. $item["PaintingID"] .'" class="ui button">Remove</a></td>
					        	</tr>';
	        				}
	        			} else {
	        				echo "<tr><td>There isn't any favorites paintings yet.</td></tr>";
	        			}
	        		?>
	        	</tbody>
	        </table>
	        <a href="remove-favourites.php?id=all" class="ui primary button">
	        	Remove All Favourites
			</a>
	    </section>    
	</main>
</body>
</html>