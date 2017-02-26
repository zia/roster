<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClssTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClssTable Test Case
 */
class ClssTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClssTable
     */
    public $Clss;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.clss',
        'app.rooms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Clss') ? [] : ['className' => 'App\Model\Table\ClssTable'];
        $this->Clss = TableRegistry::get('Clss', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Clss);

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
