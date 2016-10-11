<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilsTable Test Case
 */
class ProfilsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilsTable
     */
    public $Profils;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.profils'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Profils') ? [] : ['className' => 'App\Model\Table\ProfilsTable'];
        $this->Profils = TableRegistry::get('Profils', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Profils);

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
