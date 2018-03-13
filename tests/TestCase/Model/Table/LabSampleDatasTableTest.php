<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LabSampleDatasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LabSampleDatasTable Test Case
 */
class LabSampleDatasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LabSampleDatasTable
     */
    public $LabSampleDatas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lab_sample_datas',
        'app.sample_registrations',
        'app.lab_masters',
        'app.species_masters',
        'app.breed_masters',
        'app.sample_masters',
        'app.sample_applicable_tests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LabSampleDatas') ? [] : ['className' => LabSampleDatasTable::class];
        $this->LabSampleDatas = TableRegistry::get('LabSampleDatas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LabSampleDatas);

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
