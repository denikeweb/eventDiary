<?php
	if (!defined('ED_MODULE')) die ();

	abstract class Config {
		const DB_SERVER     = '127.0.0.1';
		const DB_USERNAME   = 'root';
		const DB_USERPASS   = '';
		const DB_NAME       = 'eventDiary';

		const ADMIN_PASS    = '111111';

		const WRAPPER_WIDTH = '100%';
	}