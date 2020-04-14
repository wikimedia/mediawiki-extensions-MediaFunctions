<?php
/**
 * The Media Functions extension allows to retrieve various information about media files
 *
 * @link https://www.mediawiki.org/wiki/Extension:MediaFunctions Documentation
 * @link https://www.mediawiki.org/wiki/Extension_talk:MediaFunctions Support
 * @link https://gerrit.wikimedia.org/r/p/mediawiki/extensions/MediaFunctions Source Code
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @author Rob Church (Robchurch) <robchur@gmail.com>
 *
 * @license https://www.opensource.org/licenses/BSD-2-Clause BSD-2-Clause
 */

// Ensure that the script cannot be executed outside of MediaWiki
if ( !defined( 'MEDIAWIKI' ) ) {
    die( 'This is an extension to MediaWiki and cannot be run standalone.' );
}

// Display extension's information on "Special:Version"
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'MediaFunctions',
	'version' => '1.4.0',
	'author' => array(
		'Rob Church',
		'...'
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:MediaFunctions',
	'descriptionmsg' => 'mediafunctions-desc',
	'license-name' => 'BSD-2-Clause'
);

// Register extension messages
$wgMessagesDirs['MediaFunctions'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['MediaFunctionsMagic'] = __DIR__ . '/MediaFunctions.i18n.magic.php';

// Load classes
$wgAutoloadClasses['MediaFunctions'] = __DIR__ . '/src/MediaFunctions.php';
$wgAutoloadClasses['MediaFunctionsHooks'] = __DIR__ . '/src/MediaFunctionsHooks.php';
// Register hooks
$wgHooks['ParserFirstCallInit'][] = 'MediaFunctionsHooks::efMediaFunctionsSetup';
