<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Bugsnag API Key
	|--------------------------------------------------------------------------
	|
	| You can find your API Key on your Bugsnag dashboard.
	|
	| This key points the Bugsnag notifier to the project in your account
	| which should receive your application's uncaught exceptions.
	|
	*/
    'api_key' => getenv('BUGSNAG_API_KEY'),

	/*
	|--------------------------------------------------------------------------
	| Notify Release Stages
	|--------------------------------------------------------------------------
	|
	| Set which release stages should send notifications to Bugsnag
	| E.g: array('development', 'production')
	|
	*/
    'notify_release_stages' => array(

		'local',
		'production',

	),

);
