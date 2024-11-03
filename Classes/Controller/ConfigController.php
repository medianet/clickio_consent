<?php
namespace Clickio\ClickioConsent\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Http\Response;

class ConfigController extends ActionController
{

    public function indexAction(): Response
    {

        $this->view->assignMultiple([
            'counts' => 1,
        ]);
        return $this->htmlResponse();
    }
}