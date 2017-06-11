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
        'app.regions',
        'app.clubs',
        'app.licencies',
        'app.grades',
        'app.disciplines',
        'app.evalues',
        'app.inscription_passages',
        'app.users',
        'app.profils',
        'app.historiques',
        'app.inscription_competitions',
        'app.competitions',
        'app.categories',
        'app.combat_poules',
        'app.repartitions',
        'app.resultat_competitions',
        'app.resultats',
        'app.resultat_poules',
        'app.tirages',
        'app.notes',
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
