<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResultatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResultatsTable Test Case
 */
class ResultatsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResultatsTable
     */
    public $Resultats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resultats',
        'app.resultat_competitions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Resultats') ? [] : ['className' => 'App\Model\Table\ResultatsTable'];
        $this->Resultats = TableRegistry::get('Resultats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Resultats);

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
