<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistoriquesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistoriquesTable Test Case
 */
class HistoriquesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistoriquesTable
     */
    public $Historiques;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.historiques'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Historiques') ? [] : ['className' => 'App\Model\Table\HistoriquesTable'];
        $this->Historiques = TableRegistry::get('Historiques', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Historiques);

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
}
