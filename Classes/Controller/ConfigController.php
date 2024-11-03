<?php
namespace Clickio\ClickioConsent\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Http\Response;

use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;


class ConfigController extends ActionController
{


    /** @var ModuleTemplateFactory */
    protected $moduleTemplateFactory;

    /** @var ExtensionConfiguration */
    protected $extensionConfiguration;

    public function injectModuleTemplateFactory(ModuleTemplateFactory $moduleTemplateFactory)
    {
        $this->moduleTemplateFactory = $moduleTemplateFactory;
    }

    public function injectExtensionConfiguration(ExtensionConfiguration $extensionConfiguration)
    {
        $this->extensionConfiguration = $extensionConfiguration;
    }

    public function indexAction(?array $newSettings = null): Response
    {

        if( $newSettings !== null) $this->extensionConfiguration->set('clickio_consent', $newSettings);
        
        $myConfiguration = $this->extensionConfiguration->get('clickio_consent');
        $moduleTemplate = $this->moduleTemplateFactory->create($this->request);

        $moduleTemplate->assignMultiple([
            $myConfiguration
        ]);
        return $moduleTemplate->renderResponse('Config/Index');

        // return $this->htmlResponse();
    }
}