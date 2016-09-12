<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LicenciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LicenciesTable Test Case
 */
class LicenciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LicenciesTable
     */
    public $Licencies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Licencies') ? [] : ['className' => 'App\Model\Table\LicenciesTable'];
        $this->Licencies = TableRegistry::get('Licencies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Licencies);

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
