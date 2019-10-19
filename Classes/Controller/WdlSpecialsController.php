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
        $this->view->assign('wdlSpecials', $wdlSpecials);

        $active = array(
            'now' => date( 'd.m.Y', strtotime('now')),
            'class' => 'special-active'
        );
        $this->view->assign('active', $active);
    }

    public function however() {
        $specialDate = $this->wdlSpecialsRepository->findByIdentifier('specialDate');
        $passedDate = date( 'd.m.Y', $specialDate );
        $now = date( 'd.m.Y', strtotime('now'));
        if ( $now == $passedDate ) {
            $this->view->assign( '' );
        }
    }
}
