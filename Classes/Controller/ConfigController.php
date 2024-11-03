<?php
namespace Clickio\ClickioConsent\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Http\Response;

use TYPO3\CMS\Backend\Template\ModuleTemplateFactory;


class ConfigController extends ActionController
{


    /** @var ModuleTemplateFactory */
    protected $moduleTemplateFactory;

    public function injectModuleTemplateFactory(ModuleTemplateFactory $moduleTemplateFactory)
    {
        $this->moduleTemplateFactory = $moduleTemplateFactory;
    }

    public function indexAction(): Response
    {

        $this->view->assignMultiple([
            'counts' => 1,
        ]);

        $moduleTemplate = $this->moduleTemplateFactory->create($this->request);
        return $moduleTemplate->renderResponse('Config/Index');

        // return $this->htmlResponse();
    }
}