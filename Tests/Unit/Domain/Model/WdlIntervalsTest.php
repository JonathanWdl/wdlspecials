<?php
namespace JonathanWdl\Wdlspecials\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Jonathan Wedel 
 */
class WdlIntervalsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \JonathanWdl\Wdlspecials\Domain\Model\WdlIntervals
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \JonathanWdl\Wdlspecials\Domain\Model\WdlIntervals();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIntervalsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIntervals()
        );
    }

    /**
     * @test
     */
    public function setIntervalsForStringSetsIntervals()
    {
        $this->subject->setIntervals('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'intervals',
            $this->subject
        );
    }
}
