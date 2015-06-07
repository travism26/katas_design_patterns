<?php
require 'vendor/autoload.php';

use pattern\observerPattern\login;

interface Observer {
	public  function handle();
}

class EmailNotifier implements Observer {

	public function handle()
	{
		var_dump('send some emails out');
	}
}

class  fileLogger implements Observer {

	public function handle()
	{
		var_dump('log some file data');
	}
}

$login = new Login;
$login->attach([new EmailNotifier, new fileLogger]);

$login->fire();
