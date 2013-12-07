<?php

	include __DIR__.'/vendor/autoload.php';

	use UFO\Test\HelloComposer as Hello;

	$test = new Hello('Yehaa');

	$app = new Slim\Slim();

	var_dump($app);