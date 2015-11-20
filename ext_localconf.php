<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['pageLoadedFromCache'][1448033240] = 'PhBergsmann\\IfModifiedSince\\Hooks\\PageLoadedFromCacheHook->returnHeaderIfModifiedSince';
