<?php
use Observer;

/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-06-06
 * Time: 3:57 PM
 */
class Auth implements subject {

	protected $observers = [];

	/**
	 * @param Observer $observer
	 */
	public function attach(Observer $observer)
	{
		$this->observers[] = $observer;
	}

	public function detach($index)
	{
		unset($this->observers[ $index ]);
	}

	public function notify($observer)
	{
		foreach ($this->observers as $observer)
		{
			$observer->handle();
		}
	}
}