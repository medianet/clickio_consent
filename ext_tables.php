<?php

defined('TYPO3') or die('Access denied.');

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Clickio.ClickioConsent', // ������� ��� namespace � ���� ����������
        'system', // �������� ������, ��������, "system" ��� "user"
        'customConfig', // ������������� ������
        '', // ������� ������
        [
            'Config' => 'index', // ������� ���������� � ��������
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:extension_key/Resources/Public/Icons/module-icon.svg', // �������� �� ������ ������
            'labels' => 'LLL:EXT:extension_key/Resources/Private/Language/locallang_mod.xlf', // �����������
        ]
    );
