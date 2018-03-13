<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StateMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StateMastersTable Test Case
 */
class StateMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StateMastersTable
     */
    public $StateMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('StateMasters') ? [] : ['className' => StateMastersTable::class];
        $this->StateMasters = TableRegistry::get('StateMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StateMasters);

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
