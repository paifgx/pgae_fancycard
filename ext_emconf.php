<?php

/*
 * This file is part of the package pgae/fancycard.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

$EM_CONF[$_EXTKEY] = [
    'title' => 'Fancy Card',
    'description' => 'A custom card element with fancy handling. It wil display an simple Card with an Image as Header and and Title and Subitle as Body. If you click on it it open a popup on large screens or an accordion body on smaller screens.',
    'category' => 'plugin',
    'author' => 'Patrik Garten',
    'author_email' => 'info@patrikgarten.de',
    'author_company' => 'private',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
