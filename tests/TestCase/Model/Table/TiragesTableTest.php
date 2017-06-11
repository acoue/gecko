<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiragesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiragesTable Test Case
 */
class TiragesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiragesTable
     */
    public $Tirages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tirages',
        'app.competitions',
        'app.categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tirages') ? [] : ['className' => 'App\Model\Table\TiragesTable'];
        $this->Tirages = TableRegistry::get('Tirages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tirages);

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
