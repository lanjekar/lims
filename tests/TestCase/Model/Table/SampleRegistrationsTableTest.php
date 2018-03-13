<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SampleRegistrationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SampleRegistrationsTable Test Case
 */
class SampleRegistrationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SampleRegistrationsTable
     */
    public $SampleRegistrations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sample_registrations',
        'app.users',
        'app.lab_masters',
        'app.state_masters',
        'app.district_masters',
        'app.dispatch_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SampleRegistrations') ? [] : ['className' => SampleRegistrationsTable::class];
        $this->SampleRegistrations = TableRegistry::get('SampleRegistrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SampleRegistrations);

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
