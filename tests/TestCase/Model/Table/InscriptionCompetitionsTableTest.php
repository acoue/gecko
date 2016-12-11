<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InscriptionCompetitionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InscriptionCompetitionsTable Test Case
 */
class InscriptionCompetitionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InscriptionCompetitionsTable
     */
    public $InscriptionCompetitions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inscription_competitions',
        'app.competitions',
        'app.categories',
        'app.combat_poules',
        'app.repartitions',
        'app.licencies',
        'app.clubs',
        'app.regions',
        'app.resultat_poules',
        'app.tirages',
        'app.users',
        'app.profils',
        'app.historiques',
        'app.inscription_passages',
        'app.passages',
        'app.evalues',
        'app.juges',
        'app.jures',
        'app.notes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InscriptionCompetitions') ? [] : ['className' => 'App\Model\Table\InscriptionCompetitionsTable'];
        $this->InscriptionCompetitions = TableRegistry::get('InscriptionCompetitions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InscriptionCompetitions);

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
