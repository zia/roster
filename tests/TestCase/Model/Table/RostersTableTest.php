<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RostersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RostersTable Test Case
 */
class RostersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RostersTable
     */
    public $Rosters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rosters',
        'app.clss',
        'app.rooms',
        'app.teachers',
        'app.subjects',
        'app.students',
        'app.attendences',
        'app.stuffs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Rosters') ? [] : ['className' => 'App\Model\Table\RostersTable'];
        $this->Rosters = TableRegistry::get('Rosters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rosters);

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
