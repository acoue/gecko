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
        'app.juges',
        'app.passages',
        'app.evalues',
        'app.licencies',
        'app.clubs',
        'app.regions',
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
}
