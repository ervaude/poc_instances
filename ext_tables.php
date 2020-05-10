<?php
defined('TYPO3_MODE') or die('Access denied!');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'site',
    'poc',
    '',
    '',
    [
        'routeTarget' => \DanielGoerz\PocInstances\Controller\DummyController::class . '::indexAction',
        'access' => 'group,user',
        'name' => 'site_poc',
        'icon' => 'EXT:poc_instances/Resources/Public/Icons/Extension.svg',
        'labels' => 'LLL:EXT:poc_instances/Resources/Private/Language/locallang_module.xlf'
    ]
);
