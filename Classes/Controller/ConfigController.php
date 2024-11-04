<?php
namespace Clickio\ClickioConsent\Controller;


use Psr\Http\Message\ServerRequestInterface;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Http\Response;

use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;


class ConfigController extends ActionController
{


  protected function initializeIndexAction(): void
    {
        if ($this->arguments->hasArgument('newSettings')) {
//            $this->arguments->getArgument('newSettings')->setDataType('array');
        }
    }



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
        if ($newSettings !== null) {
            \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($newSettings);
        }

        if( $newSettings !== null){
                $newSettings['consent_enabled'] =  !!$newSettings['consent_enabled'];
                $this->extensionConfiguration->set('clickio_consent', $newSettings);
        }
        
        $myConfiguration = $this->extensionConfiguration->get('clickio_consent');
        $moduleTemplate = $this->moduleTemplateFactory->create($this->request);

        $moduleTemplate->assignMultiple([ 'newSettings' => $myConfiguration]);
        $moduleTemplate->assignMultiple(['options' => print_r(['old' => $myConfiguration, 'new' => $newSettings ],true)]);

        return $moduleTemplate->renderResponse('Config/Index');

        // return $this->htmlResponse();
    }
}
