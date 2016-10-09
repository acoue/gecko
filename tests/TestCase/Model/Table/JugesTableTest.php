<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JugesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JugesTable Test Case
 */
class JugesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JugesTable
     */
    public $Juges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.juges',
        'app.passages',
        'app.evalues',
        'app.jures'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Juges') ? [] : ['className' => 'App\Model\Table\JugesTable'];
        $this->Juges = TableRegistry::get('Juges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Juges);

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
