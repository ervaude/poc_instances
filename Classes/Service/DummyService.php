<?php


namespace DanielGoerz\PocInstances\Service;


use DanielGoerz\PocInstances\Domain\Repository\BackendUserRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class DummyService
{
    /**
     * @var string
     */
    protected $arg1;
    /**
     * @var array
     */
    protected $arg2;

    public function __construct(string $arg1, array $arg2)
    {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
    }

    public function dummyMethod(): array
    {
        return GeneralUtility::makeInstance(BackendUserRepository::class)->findAll()->toArray();
    }
}