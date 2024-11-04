<?php

declare(strict_types=1);

namespace Clickio\ClickioConsent\Hooks\PageRenderer;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Site\Entity\Site;

/**
 * @internal
 */
final class ConsentCodeInjector
{
    public function __construct(
        private readonly EventDispatcherInterface $eventDispatcher,
    ) {}

    /**
     * @param array{}|null $params
     */
    public function execute(?array &$params, PageRenderer $pageRenderer): void
    {
        $request = $this->getRequest();
        if ($request->getAttribute('applicationType') !== 1) {
            // Not a frontend request
            return;
        }
        $pageRenderer->addHeaderData('<script> alert("11111"); </script>');

    }

/*
    private function hasValidConfiguration(Configuration $configuration): bool
    {
        if (! \filter_var($configuration->url, \FILTER_VALIDATE_URL)) {
            return false;
        }

        return $configuration->siteId > 0;
    }
*/

    private function getRequest(): ServerRequestInterface
    {
        return $GLOBALS['TYPO3_REQUEST'];
    }
}
