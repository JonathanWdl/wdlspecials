<?php
namespace JonathanWdl\Wdlspecials\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Jonathan Wedel 
 */
class WdlSpecialsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \JonathanWdl\Wdlspecials\Controller\WdlSpecialsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\JonathanWdl\Wdlspecials\Controller\WdlSpecialsController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllWdlSpecialssFromRepositoryAndAssignsThemToView()
    {

        $allWdlSpecialss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $wdlSpecialsRepository = $this->getMockBuilder(\JonathanWdl\Wdlspecials\Domain\Repository\WdlSpecialsRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $wdlSpecialsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allWdlSpecialss));
        $this->inject($this->subject, 'wdlSpecialsRepository', $wdlSpecialsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('wdlSpecialss', $allWdlSpecialss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
