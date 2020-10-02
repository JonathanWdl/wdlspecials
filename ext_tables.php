<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'JonathanWdl.Wdlspecials',
            'Wdlspecials',
            'WdlSpecials'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('wdlspecials', 'Configuration/TypoScript', 'Wdl_Special');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wdlspecials_domain_model_wdlspecials', 'EXT:wdlspecials/Resources/Private/Language/locallang_csh_tx_wdlspecials_domain_model_wdlspecials.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wdlspecials_domain_model_wdlspecials');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wdlspecials_domain_model_wdlcategories', 'EXT:wdlspecials/Resources/Private/Language/locallang_csh_tx_wdlspecials_domain_model_wdlcategories.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wdlspecials_domain_model_wdlcategories');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wdlspecials_domain_model_wdlintervals', 'EXT:wdlspecials/Resources/Private/Language/locallang_csh_tx_wdlspecials_domain_model_wdlintervals.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wdlspecials_domain_model_wdlintervals');

    }
);
