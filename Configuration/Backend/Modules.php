<?php

declare(strict_types=1);

use Clickio\ClickioConsent\Controller\ConfigController;
//use TYPO3\CMS\Core\Utility\GeneralUtility;

    return [
        'web_consentAdministration' => [
            'parent' => 'web',
            'position' => ['after' => '*'],
            'access' => 'user,group',
            'path' => '/module/web/ConsentSetup/',
            'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
            'labels' => 'LLL:EXT:news/Resources/Private/Language/locallang_modadministration.xlf',
            'extensionName' => 'ClickioConsent',
            'controllerActions' => [
                ConfigController::class => [
                    'index'
                ],
            ],
        ],
    ];
