<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JuresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JuresTable Test Case
 */
class JuresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JuresTable
     */
    public $Jures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jures',
        'app.juges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jures') ? [] : ['className' => 'App\Model\Table\JuresTable'];
        $this->Jures = TableRegistry::get('Jures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jures);

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
