<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'wohnung_ohde_golf';

    /**
     * Default TypoScript for WohnungOhdeGolf
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Wohnung Ohde-Golf'
    );
});
