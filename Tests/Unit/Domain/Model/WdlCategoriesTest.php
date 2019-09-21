<?php
namespace JonathanWdl\Wdlspecials\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Jonathan Wedel 
 */
class WdlCategoriesTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \JonathanWdl\Wdlspecials\Domain\Model\WdlCategories
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \JonathanWdl\Wdlspecials\Domain\Model\WdlCategories();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForStringSetsCategory()
    {
        $this->subject->setCategory('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'category',
            $this->subject
        );
    }
}
