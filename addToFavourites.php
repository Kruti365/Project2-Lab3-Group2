<?php
	session_start();

	if (!isset($_SESSION['favorites_list'])) {
        $_SESSION['favorites_list'] = array();
    }

	if(
		isset($_GET["id"]) &&
		isset($_GET["image"]) &&
		isset($_GET["title"])
	) {
		$paintingsArray = array(
			'PaintingID' => $_GET["id"],
			'ImageFileName' => $_GET["image"],
			'Title' => $_GET["title"]
		);

		array_push($_SESSION['favorites_list'], $paintingsArray);
	}

    header("Location:view-favourites.php");
    
?>