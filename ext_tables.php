<?php

defined('TYPO3') or die('Access denied.');

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Clickio.ClickioConsent', // Укажите ваш namespace и ключ расширения
        'system', // Выберите раздел, например, "system" или "user"
        'customConfig', // Идентификатор модуля
        '', // Позиция модуля
        [
            'Config' => 'index', // Укажите контроллер и действие
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:extension_key/Resources/Public/Icons/module-icon.svg', // Замените на иконку модуля
            'labels' => 'LLL:EXT:extension_key/Resources/Private/Language/locallang_mod.xlf', // Локализация
        ]
    );
