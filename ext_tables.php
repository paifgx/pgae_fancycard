<?php defined('TYPO3_MODE') || die('Access denied.');

/***************
 * Allow Custom Records on Standard Pages
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pgaefancycard_item');
