<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CombatPoulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CombatPoulesTable Test Case
 */
class CombatPoulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CombatPoulesTable
     */
    public $CombatPoules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.combat_poules',
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
        $config = TableRegistry::exists('CombatPoules') ? [] : ['className' => 'App\Model\Table\CombatPoulesTable'];
        $this->CombatPoules = TableRegistry::get('CombatPoules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CombatPoules);

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
