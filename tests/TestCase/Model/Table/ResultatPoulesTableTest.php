<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResultatPoulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResultatPoulesTable Test Case
 */
class ResultatPoulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResultatPoulesTable
     */
    public $ResultatPoules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resultat_poules',
        'app.licencies',
        'app.clubs',
        'app.regions',
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
        $config = TableRegistry::exists('ResultatPoules') ? [] : ['className' => 'App\Model\Table\ResultatPoulesTable'];
        $this->ResultatPoules = TableRegistry::get('ResultatPoules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ResultatPoules);

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
