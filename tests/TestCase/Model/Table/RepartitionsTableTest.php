<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RepartitionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RepartitionsTable Test Case
 */
class RepartitionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RepartitionsTable
     */
    public $Repartitions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.repartitions',
        'app.competitions',
        'app.categories',
        'app.regions',
        'app.clubs',
        'app.licencies',
        'app.grades',
        'app.disciplines',
        'app.combat_poules',
        'app.inscription_competitions',
        'app.users',
        'app.profils',
        'app.historiques',
        'app.inscription_passages',
        'app.passages',
        'app.evalues',
        'app.juges',
        'app.jurys',
        'app.notes',
        'app.resultat_competitions',
        'app.resultats',
        'app.resultat_poules',
        'app.tirages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Repartitions') ? [] : ['className' => 'App\Model\Table\RepartitionsTable'];
        $this->Repartitions = TableRegistry::get('Repartitions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Repartitions);

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
