<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResultatCompetitionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResultatCompetitionsTable Test Case
 */
class ResultatCompetitionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResultatCompetitionsTable
     */
    public $ResultatCompetitions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resultat_competitions',
        'app.competitions',
        'app.categories',
        'app.regions',
        'app.clubs',
        'app.licencies',
        'app.grades',
        'app.combat_poules',
        'app.inscription_competitions',
        'app.users',
        'app.profils',
        'app.historiques',
        'app.inscription_passages',
        'app.passages',
        'app.evalues',
        'app.juges',
        'app.jures',
        'app.notes',
        'app.repartitions',
        'app.resultat_poules',
        'app.tirages',
        'app.resultats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ResultatCompetitions') ? [] : ['className' => 'App\Model\Table\ResultatCompetitionsTable'];
        $this->ResultatCompetitions = TableRegistry::get('ResultatCompetitions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ResultatCompetitions);

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
