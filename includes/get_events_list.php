<?php
	if (!defined('ED_MODULE')) die ();

	function getRecords () {
		global $mysqli, $eventDisplayCount;
		$query = "
			SELECT
				`events`.`id`,
				`events`.`title`,
				`events`.`text`,
				`events`.`date`,
				`cats`.`title` as `cat`
			FROM
				`events`
			INNER JOIN
				`cats`
				ON `events`.`category_id`=`cats`.`id`
			WHERE
				`visible`='1'
			ORDER BY
				`events`.`date` DESC,
				`events`.`id` DESC
			LIMIT
				0, $eventDisplayCount
		";
		$result = $mysqli->query ($query);
		$eventsList = $result->fetch_all (MYSQL_ASSOC);
		return $eventsList;
	}

	$eventsList = getRecords();