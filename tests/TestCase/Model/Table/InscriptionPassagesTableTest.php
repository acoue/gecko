<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InscriptionPassagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InscriptionPassagesTable Test Case
 */
class InscriptionPassagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InscriptionPassagesTable
     */
    public $InscriptionPassages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inscription_passages',
        'app.passages',
        'app.regions',
        'app.clubs',
        'app.licencies',
        'app.grades',
        'app.disciplines',
        'app.evalues',
        'app.juges',
        'app.jurys',
        'app.notes',
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
        $config = TableRegistry::exists('InscriptionPassages') ? [] : ['className' => 'App\Model\Table\InscriptionPassagesTable'];
        $this->InscriptionPassages = TableRegistry::get('InscriptionPassages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InscriptionPassages);

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
