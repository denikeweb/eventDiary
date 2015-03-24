<?php
	if (!defined('ED_MODULE')) die ();

	function createNewRecord () {
		global $mysqli;
		$category_id = (int) $_POST ['cats_list'];
		$title = $mysqli->real_escape_string ($_POST ['ed_title']);
		$text = $mysqli->real_escape_string ($_POST ['ed_text']);
		$date = $mysqli->real_escape_string ((isset ($_POST ['ed_date'])) ? $_POST ['ed_date'] : date ('Y-m-d'));

		$query = "
			INSERT INTO
			`events`
			(
				`category_id`,
				`title`,
				`text`,
				`date`
			)
			VALUES
			(
				'$category_id',
				'$title',
				'$text',
				'$date'
			)
		";
		$result = $mysqli->query ($query);
		return $result;
	}

	if (isset ($_POST ['createSubmitBtn']))
		createNewRecord ();