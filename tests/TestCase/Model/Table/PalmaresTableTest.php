<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PalmaresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PalmaresTable Test Case
 */
class PalmaresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PalmaresTable
     */
    public $Palmares;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.palmares',
        'app.licencies',
        'app.clubs',
        'app.regions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Palmares') ? [] : ['className' => 'App\Model\Table\PalmaresTable'];
        $this->Palmares = TableRegistry::get('Palmares', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Palmares);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
