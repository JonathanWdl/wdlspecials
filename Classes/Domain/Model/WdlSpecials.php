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
 * WdlSpecials
 */
class WdlSpecials extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * specialDate
     *
     * @var int
     */
    protected $specialDate = 0;

    /**
     * specialStart
     * 
     * @var int
     */
    protected $specialStart = 0;

    /**
     * specialStop
     * 
     * @var int
     */
    protected $specialStop = 0;

    /**
     * category
     * 
     * @var \JonathanWdl\Wdlspecials\Domain\Model\WdlCategories
     */
    protected $category = null;

    /**
     * intervals
     * 
     * @var \JonathanWdl\Wdlspecials\Domain\Model\WdlIntervals
     */
    protected $intervals = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Return the specialDate
     *
     * @return int $specialDate
     */
    public function getSpecialDate() {
            return $this->specialDate;
    }

    /**
     * Sets the specialDate
     *
     * @param int $specialDate
     * @return void
     */
    public function setSpecialDate ( $specialDate ) {
        $this->specialDate = $specialDate;
    }

    /**
     * Returns the specialStart
     * 
     * @return int $specialStart
     */
    public function getSpecialStart()
    {
        return $this->specialStart;
    }

    /**
     * Sets the specialStart
     * 
     * @param int $specialStart
     * @return void
     */
    public function setSpecialStart(int $specialStart)
    {
        $this->specialStart = $specialStart;
    }

    /**
     * Returns the specialStop
     * 
     * @return int $specialStop
     */
    public function getSpecialStop()
    {
        return $this->specialStop;
    }

    /**
     * Sets the specialStop
     * 
     * @param int $specialStop
     * @return void
     */
    public function setSpecialStop(int $specialStop)
    {
        $this->specialStop = $specialStop;
    }

    /**
     * Returns the category
     * 
     * @return \JonathanWdl\Wdlspecials\Domain\Model\WdlCategories $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param \JonathanWdl\Wdlspecials\Domain\Model\WdlCategories $category
     * @return void
     */
    public function setCategory(\JonathanWdl\Wdlspecials\Domain\Model\WdlCategories $category)
    {
        $this->category = $category;
    }

    /**
     * Returns the intervals
     * 
     * @return \JonathanWdl\Wdlspecials\Domain\Model\WdlIntervals $intervals
     */
    public function getIntervals()
    {
        return $this->intervals;
    }

    /**
     * Sets the intervals
     * 
     * @param \JonathanWdl\Wdlspecials\Domain\Model\WdlIntervals $intervals
     * @return void
     */
    public function setIntervals(\JonathanWdl\Wdlspecials\Domain\Model\WdlIntervals $intervals)
    {
        $this->intervals = $intervals;
    }
}
