<?php
namespace pattern\observerPattern;
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-06-06
 * Time: 7:44 PM
 */

class LogHandler implements Observer{

	public function handle()
	{
		var_dump('log something important');
	}
}