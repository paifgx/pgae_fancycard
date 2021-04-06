<?php

/*
 * This file is part of the package pgae/fancycard.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        'pgae_fancycard',
        'setup',
        "@import 'EXT:pgae_fancycard/Configuration/TypoScript/setup.typoscript'"
    );

    /***************
     * PageTS
     */
    // Add Content Elements
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pgae_fancycard/Configuration/TsConfig/Page/ContentElement/All.tsconfig">');

    // TCEFORM
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:pgae_fancycard/Configuration/TsConfig/Page/TCEFORM.tsconfig">');
});
