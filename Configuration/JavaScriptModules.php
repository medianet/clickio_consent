<?php

return [
'dependencies' => [ 'backend'],
'tags' => [
        'backend.form',
    ],
    'imports' => [
        '@clickio/clickio_consent/' => [
            'path' => 'EXT:clickio_consent/Resources/Public/JavaScript/',
            'exclude' => [
                'EXT:clickio_consent/Resources/Public/JavaScript/Contrib/',
                'EXT:clickio_consent/Resources/Public/JavaScript/Overrides/',
            ],
        ],
        // Adding a third party package
//        'thirdpartypkg' => 'EXT:my_extension/Resources/Public/JavaScript/Contrib/thidpartypkg/index.js',
//        'thidpartypkg/' => 'EXT:my_extension/Resources/Public/JavaScript/Contrib/thirdpartypkg/',
        // Overriding a file from another package
//        '@typo3/backend/modal.js' => 'EXT:my_extension/Resources/Public/JavaScript/Overrides/BackendModal.js',
    ],
];