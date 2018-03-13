<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DispatchMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DispatchMastersTable Test Case
 */
class DispatchMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DispatchMastersTable
     */
    public $DispatchMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('DispatchMasters') ? [] : ['className' => DispatchMastersTable::class];
        $this->DispatchMasters = TableRegistry::get('DispatchMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DispatchMasters);

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
