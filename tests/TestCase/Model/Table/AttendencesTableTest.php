<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttendencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttendencesTable Test Case
 */
class AttendencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AttendencesTable
     */
    public $Attendences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.attendences',
        'app.students',
        'app.clss',
        'app.sections',
        'app.rooms',
        'app.teachers',
        'app.subjects',
        'app.rosters',
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
        $config = TableRegistry::exists('Attendences') ? [] : ['className' => 'App\Model\Table\AttendencesTable'];
        $this->Attendences = TableRegistry::get('Attendences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Attendences);

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
