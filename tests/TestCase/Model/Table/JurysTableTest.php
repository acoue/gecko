<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JurysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JurysTable Test Case
 */
class JurysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JurysTable
     */
    public $Jurys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jurys',
        'app.grades',
        'app.licencies',
        'app.clubs',
        'app.regions',
        'app.juges',
        'app.passages',
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
        $config = TableRegistry::exists('Jurys') ? [] : ['className' => 'App\Model\Table\JurysTable'];
        $this->Jurys = TableRegistry::get('Jurys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jurys);

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
