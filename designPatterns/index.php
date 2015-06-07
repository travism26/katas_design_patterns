<?php
require 'vendor/autoload.php';

use pattern\observerPattern\login;
use pattern\observerPattern\Observer;

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

class  adminNotify implements Observer {

	public function handle()
	{
		var_dump('notify admin that new users has login.');
	}
}

class  someOtherClass implements Observer {

	public function handle()
	{
		var_dump('Do something....');
	}
}

//lets just say this is our factory class below :)
$login = new Login;
$login->attach([new EmailNotifier, new fileLogger]);

$login->attach(new someOtherClass())->attach(new adminNotify());
$login->fire();
