<?php

declare(strict_types=1);

use Clickio\ClickioConsent\Controller\ConfigController;
//use TYPO3\CMS\Core\Utility\GeneralUtility;

    return [
        'web_clickio_consent' => [
            'parent' => 'web',
            'position' => ['after' => '*'],
            'access' => 'user,group',
            'path' => '/module/web/ConsentSetup/',
            'icon' => 'EXT:clickio_consent/Resources/Public/Icons/Extension.svg',
            'labels' => 'LLL:EXT:clickio_consent/Resources/Private/Language/locallang_consent.xlf',
            'extensionName' => 'ClickioConsent',
            'controllerActions' => [
                ConfigController::class => [
                    'index'
                ],
            ],
        ],
    ];
