<?php
namespace pattern\observerPattern;


interface Subject {

	public function attach($observer);

	public function detach($observer);

	public function notify($observer);

}