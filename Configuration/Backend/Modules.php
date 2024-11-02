use Clickio\ClickioConsent\Controller\ConfigController;

return [
    'clickio-consent' => [
        'parent' => 'web',
        'position' => ['after' => 'web_info'],
        'access' => 'user',
        'workspaces' => 'live',
        'path' => '/module/page/clickio_consent',
        'labels' => 'LLL:EXT:examples/Resources/Private/Language/Module/locallang_mod.xlf',
        'extensionName' => 'Clickio Consent',
        'iconIdentifier' => 'tx_clickio_consent-module',
        'controllerActions' => [
            ConfigController::class => [
                'flash', 'tree', 'clipboard', 'links', 'fileReference', 'fileReferenceCreate', 'count',
            ],
        ],
    ]
];
