<?php

class MediaFunctionsHooks {

	/**
	 * Register function callbacks and add error messages to the message cache.
	 *
	 * @param Parser &$parser
	 */
	static function efMediaFunctionsSetup( &$parser ) {
		$parser->setFunctionHook( 'mediamime', array( 'MediaFunctions', 'mediamime' ) );
		$parser->setFunctionHook( 'mediasize', array( 'MediaFunctions', 'mediasize' ) );
		$parser->setFunctionHook( 'mediaheight', array( 'MediaFunctions', 'mediaheight' ) );
		$parser->setFunctionHook( 'mediawidth', array( 'MediaFunctions', 'mediawidth' ) );
		$parser->setFunctionHook( 'mediadimensions', array( 'MediaFunctions', 'mediadimensions' ) );
		$parser->setFunctionHook( 'mediaexif', array( 'MediaFunctions', 'mediaexif' ) );
		$parser->setFunctionHook( 'mediapages', array( 'MediaFunctions', 'mediapages' ) );
	}
}
