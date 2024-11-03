<?php
namespace Clickio\ClickioConsent\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ConfigController extends ActionController
{

    public function indexAction(): TYPO3\CMS\Core\Http\Response
    {

        $this->view->assignMultiple([
            'counts' => 1,
        ]);
        return $this->htmlResponse();
    }
}