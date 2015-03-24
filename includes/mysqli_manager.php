<?php
	if (!defined('ED_MODULE')) die ();
	function connect () {
		global $mysqli;
		$mysqli = new mysqli (
			Config::DB_SERVER,
			Config::DB_USERNAME,
			Config::DB_USERPASS,
			Config::DB_NAME
		);
		$mysqli->query ("SET NAMES 'utf8'");
	}

	connect();