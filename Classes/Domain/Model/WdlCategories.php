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
 * WdlCategories
 */
class WdlCategories extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * category
     * 
     * @var string
     */
    protected $category = '';

    /**
     * Returns the category
     * 
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param string $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}
