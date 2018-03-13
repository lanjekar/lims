<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DistrictMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DistrictMastersTable Test Case
 */
class DistrictMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DistrictMastersTable
     */
    public $DistrictMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.district_masters',
        'app.state_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DistrictMasters') ? [] : ['className' => DistrictMastersTable::class];
        $this->DistrictMasters = TableRegistry::get('DistrictMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DistrictMasters);

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
