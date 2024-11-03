<?php
namespace Clickio\ClickioConsent\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ConfigController extends ActionController
{

    public function indexAction(): ResponseInterface
    {

        $this->view->assignMultiple([
            'counts' => 1,
        ]);
        return $this->htmlResponse();
    }
}