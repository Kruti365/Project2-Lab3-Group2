<?php
	session_start();

	if(isset($_GET["id"]) && $_GET["id"] === "all")
	{
		unset($_SESSION['favorites_list']);
	} else if (isset($_GET["id"])) {
		foreach ($_SESSION['favorites_list'] as $key => $item) {
			if ($item['PaintingID'] === $_GET["id"]) {
				unset($_SESSION['favorites_list'][$key]);
			}
		}
	}

    header("Location:view-favourites.php");
?>