<?php
namespace JonathanWdl\Wdlspecials\Controller;


/***
 *
 * This file is part of the "Wdl_Special" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Jonathan Wedel
 *
 ***/
/**
 * WdlSpecialsController
 */
class WdlSpecialsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * wdlSpecialsRepository
     * 
     * @var \JonathanWdl\Wdlspecials\Domain\Repository\WdlSpecialsRepository
     * @inject
     */
    protected $wdlSpecialsRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $wdlSpecials = $this->wdlSpecialsRepository->findAll();
        // Arrays to store specials in
        $activeSpecials = array();
        $notActiveSpecials = array();
        // Check if specials are today or not
        foreach ($wdlSpecials as $key => $special) {
            $specialDate = date('d.m.Y', $special->getSpecialDate());
            $currentDate = date('d.m.Y');
            if ( $specialDate == $currentDate) {
                $activeSpecials[$key] = $special;
            } else {
                $notActiveSpecials[$key] = $special;
            }
        }
        // Sort array ascending by specialDate
        usort( $notActiveSpecials, function( $a, $b ) {
            if ( $a->getSpecialDate() == $b->getSpecialDate()) {
                return 0;
            } else {
                return $a->getSpecialDate() < $b->getSpecialDate() ? -1 : 1; //ascending
            }
        });
        // Assign all specials to view
        $this->view->assign( 'activeSpecials', $activeSpecials );
        $this->view->assign( 'notActiveSpecials', $notActiveSpecials);
    }
}
