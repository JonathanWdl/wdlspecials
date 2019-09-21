<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'JonathanWdl.Wdlspecials',
            'Wdlspecials',
            [
                'WdlSpecials' => 'list'
            ],
            // non-cacheable actions
            [
                'WdlSpecials' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    wdlspecials {
                        iconIdentifier = wdlspecials-plugin-wdlspecials
                        title = LLL:EXT:wdlspecials/Resources/Private/Language/locallang_db.xlf:tx_wdlspecials_wdlspecials.name
                        description = LLL:EXT:wdlspecials/Resources/Private/Language/locallang_db.xlf:tx_wdlspecials_wdlspecials.description
                        tt_content_defValues {
                            CType = list
                            list_type = wdlspecials_wdlspecials
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'wdlspecials-plugin-wdlspecials',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:wdlspecials/Resources/Public/Icons/user_plugin_wdlspecials.svg']
			);
		
    }
);
