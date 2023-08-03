<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

// Register cache
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tx_xmltool_recordcache'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['tx_xmltool_recordcache'] = [];
}
