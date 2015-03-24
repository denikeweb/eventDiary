<?php
	if (!defined('ED_MODULE')) die ();

	$ed_pass = 'ed_pass';
	$viewed_events_count = 'viewed_events_count';

	function createCookie ($name, $value) {
		setcookie($name, $value); // ten months
		$_COOKIE [$name] = $value;
	}

	function getCookie ($name) {
		return $_COOKIE [$name];
	}

	function issetCookie ($name) {
		return isset($_COOKIE [$name]);
	}

	if (isset ($_POST [$ed_pass])) {
		$pass = $_POST [$ed_pass];
		createCookie($ed_pass, $pass);
	}

	if (isset ($_GET [$viewed_events_count])) {
		$eventDisplayCount = $_GET [$viewed_events_count];
		createCookie($viewed_events_count, $eventDisplayCount);
	} else {
		$eventDisplayCount = getCookie($viewed_events_count);
	}
	if (!issetCookie($viewed_events_count)) {
		createCookie($viewed_events_count, 100);
	}