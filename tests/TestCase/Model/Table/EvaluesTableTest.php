<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvaluesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvaluesTable Test Case
 */
class EvaluesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvaluesTable
     */
    public $Evalues;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evalues',
        'app.passages',
        'app.juges',
        'app.jures',
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
        $config = TableRegistry::exists('Evalues') ? [] : ['className' => 'App\Model\Table\EvaluesTable'];
        $this->Evalues = TableRegistry::get('Evalues', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Evalues);

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
