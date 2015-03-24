<?php
	if (!defined('ED_MODULE')) die ();
	function lock () {
		global $ed_pass;
		if (getCookie($ed_pass) != Config::ADMIN_PASS) {
			include ('includes/html_lock.php');
			exit ();
		}
	}
	lock ();