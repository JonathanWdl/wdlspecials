<?php
namespace JonathanWdl\Wdlspecials\Domain\Model;


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
 * WdlIntervals
 */
class WdlIntervals extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * intervals
     * 
     * @var string
     */
    protected $intervals = '';

    /**
     * Returns the intervals
     * 
     * @return string $intervals
     */
    public function getIntervals()
    {
        return $this->intervals;
    }

    /**
     * Sets the intervals
     * 
     * @param string $intervals
     * @return void
     */
    public function setIntervals($intervals)
    {
        $this->intervals = $intervals;
    }
}
