<?php
namespace JonathanWdl\Wdlspecials\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Jonathan Wedel 
 */
class WdlSpecialsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \JonathanWdl\Wdlspecials\Domain\Model\WdlSpecials
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \JonathanWdl\Wdlspecials\Domain\Model\WdlSpecials();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSpecialStartReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSpecialStart()
        );
    }

    /**
     * @test
     */
    public function setSpecialStartForIntSetsSpecialStart()
    {
        $this->subject->setSpecialStart(12);

        self::assertAttributeEquals(
            12,
            'specialStart',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSpecialStopReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSpecialStop()
        );
    }

    /**
     * @test
     */
    public function setSpecialStopForIntSetsSpecialStop()
    {
        $this->subject->setSpecialStop(12);

        self::assertAttributeEquals(
            12,
            'specialStop',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForWdlCategories()
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForWdlCategoriesSetsCategory()
    {
        $categoryFixture = new \JonathanWdl\Wdlspecials\Domain\Model\WdlCategories();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIntervalsReturnsInitialValueForWdlIntervals()
    {
        self::assertEquals(
            null,
            $this->subject->getIntervals()
        );
    }

    /**
     * @test
     */
    public function setIntervalsForWdlIntervalsSetsIntervals()
    {
        $intervalsFixture = new \JonathanWdl\Wdlspecials\Domain\Model\WdlIntervals();
        $this->subject->setIntervals($intervalsFixture);

        self::assertAttributeEquals(
            $intervalsFixture,
            'intervals',
            $this->subject
        );
    }
}
