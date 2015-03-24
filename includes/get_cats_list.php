<?php
	if (!defined('ED_MODULE')) die ();
	function getCats () {
		global $mysqli;
		$query = 'SELECT * FROM `cats` WHERE 1 ORDER BY `id` DESC';
		$result = $mysqli->query ($query);
		$catsList = $result->fetch_all (MYSQL_ASSOC);
		return $catsList;
	}

	$catsList = getCats();