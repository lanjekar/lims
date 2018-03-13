<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SampleMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SampleMastersTable Test Case
 */
class SampleMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SampleMastersTable
     */
    public $SampleMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sample_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SampleMasters') ? [] : ['className' => SampleMastersTable::class];
        $this->SampleMasters = TableRegistry::get('SampleMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SampleMasters);

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
