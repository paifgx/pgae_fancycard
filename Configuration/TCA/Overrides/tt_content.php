<?php defined('TYPO3_MODE') || die('Access denied.');

/***************
 * Add Content Element
 */
if (!is_array($GLOBALS['TCA']['tt_content']['types']['pgae_fancycard'])) {
    $GLOBALS['TCA']['tt_content']['types']['pgae_fancycard'] = [];
}

/***************
 * Add content element PageTSConfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Page/ContentElement/Element/FancyCard.tsconfig',
    'LLL:EXT:pgae_fancycard/Resources/Private/Language/locallang.xlf:pgae_fancycard_title'
);

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:pgae_fancycard/Resources/Private/Language/locallang.xlf:pgae_fancycard_title',
        'pgae_fancycard',
        'content-text'
    ],
    'textmedia',
    'after'
);

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['pgae_fancycard'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['pgae_fancycard'],
    [
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        '
    ]
);
