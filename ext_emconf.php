<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Clickio Consent',
    'description' => 'The fastest way to activate Clickio Consent in Drupal. Comply with GDPR, TCF and Consent Mode in minutes.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.3.99',
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Clickio\\ClickioConsent\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Alexander Sabaev',
    'author_email' => 'asabay@gmail.com',
    'author_company' => 'Clickio',
    'version' => '1.0.36',
];
