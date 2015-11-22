<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'If-Modified-Since',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Philipp Bergsmann',
	'author_email' => 'me@ph-bergsmann.com',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => \PhBergsmann\IfModifiedSince\Version::VERSION,
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.4'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
