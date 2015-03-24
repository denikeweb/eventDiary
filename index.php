<?php
	define('ED_MODULE', true);

	# globals
		$mysqli = NULL;

		# cookie keys
		$ed_pass = NULL;
		$viewed_events_count = NULL;

		# data
		$eventsList = NULL;
		$catsList = NULL;
		$eventDisplayCount = NULL;

	include ('includes/config.php');
	include ('includes/cookie_manager.php');
	include ('includes/lock.php');
	include ('includes/mysqli_manager.php');
	include ('includes/create.php');
	include ('includes/get_cats_list.php');
	include ('includes/get_events_list.php');
	include ('includes/html_index.php');