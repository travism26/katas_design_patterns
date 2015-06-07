<?php
namespace pattern\observerPattern;
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-06-06
 * Time: 3:57 PM
 */
class Login implements subject {

	protected $observers = [];

	/**
	 * @param $observable
	 *
	 * @internal param Observer $observer
	 * @return $this|void
	 */
	public function attach($observable)
	{
		if(is_array($observable))
		{
			return $this->attachObservers($observable);
		}

		$this->observers[] = $observable;

		return $this;
	}

	public function detach($index)
	{
		unset($this->observers[ $index ]);
	}

	public function notify()
	{
		foreach ($this->observers as $observer)
		{
			$observer->handle();
		}
	}

	/**
	 * @param $observable
	 */
	private function attachObservers($observable)
	{
		foreach ($observable as $observer)
		{
			$this->attach($observer);
		}
	}

	public function fire()
	{
		$this->notify();
	}
}