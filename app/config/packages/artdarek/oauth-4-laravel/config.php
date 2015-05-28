<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(
        'Facebook' => array(
            'client_id'     => '974363352625758',
            'client_secret' => '331d66f304bd894c3e393831a41990e0',
            'scope'         => array(),
        ),		
        'Google' => array(
    	'client_id'     => '870200329148-b866k8eu6bfc7ibvg8hedco0403eirqr.apps.googleusercontent.com',
    	'client_secret' => 'StLKnaQPGcgCkQTa65Y8Oi6s',
    	'scope'         => array('userinfo_email', 'userinfo_profile'),
		),
		'Twitter' => array(
	    'client_id'     => 'MDaypLm9fHfTyETKV3YVVqfAp',
	    'client_secret' => '0SuxdpI4qwbcOGXqRfA38OSt6oVm8OxKASUZwuBy2QpP4r893Q',
	    // No scope - oauth1 doesn't need scope
		),  
	)

);