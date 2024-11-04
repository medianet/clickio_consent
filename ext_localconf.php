<?php

defined('TYPO3') or die('Access denied.');

// Add default RTE configuration
//$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['clickio_consent'] = 'EXT:clickio_consent/Configuration/RTE/Default.yaml';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postTransform'][] = ConsentCodeInjector::class . '->execute';
