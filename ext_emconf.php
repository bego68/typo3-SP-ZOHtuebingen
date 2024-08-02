<?php

/**
 * Extension Manager/Repository config file for ext "wohnung_ohde_golf".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Wohnung Ohde-Golf',
    'description' => 'Vorstellung der Wohnung',
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
            'HubertusGolf\\WohnungOhdeGolf\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Hubertus golf',
    'author_email' => 'info@hubertus-golf.de',
    'author_company' => 'Hubertus Golf',
    'version' => '1.0.0',
];
