<?php namespace pattern\observerPattern;
require '../../index.php';

class emailNotifier implements Observer {

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
$login->attach([new emailNotifier, new fileLogger]);

$login->attach(new someOtherClass())->attach(new adminNotify())->attach(new LogHandler());
$login->fire();
