<?php

/**
 * Extension Manager/Repository config file for ext "theme".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Theme',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Daoued\\Theme\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Haythem Daoued',
    'author_email' => 'haythemdaoud.x@gmail.com',
    'author_company' => 'Daoued',
    'version' => '1.0.0',
];
