<?php

/**
 * Extension Manager/Repository config file for ext "zoh_tuebingen".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'ZOH Tübingen',
    'description' => 'Sitepackage für eine Praxis Homepage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HubertusGolfItUndDigitalisierungsberatung\\ZohTuebingen\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Hubertus Golf',
    'author_email' => 'info@hubertus-golf.de',
    'author_company' => 'Hubertus Golf - IT- und Digitalisierungsberatung',
    'version' => '1.0.0',
];
