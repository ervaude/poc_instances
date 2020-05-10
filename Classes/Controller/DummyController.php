<?php


namespace DanielGoerz\PocInstances\Controller;


use DanielGoerz\PocInstances\Service\DummyService;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Http\HtmlResponse;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class DummyController
{

    public function indexAction(): ResponseInterface
    {
        $repo = GeneralUtility::makeInstance(
            DummyService::class,
            'foo',
            ['bar', 'baz']
        );
        DebuggerUtility::var_dump($repo->dummyMethod());
        return new HtmlResponse('');
    }
}