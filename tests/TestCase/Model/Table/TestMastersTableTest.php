<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestMastersTable Test Case
 */
class TestMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestMastersTable
     */
    public $TestMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.test_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TestMasters') ? [] : ['className' => TestMastersTable::class];
        $this->TestMasters = TableRegistry::get('TestMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TestMasters);

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
