<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiseaseMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiseaseMastersTable Test Case
 */
class DiseaseMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiseaseMastersTable
     */
    public $DiseaseMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.disease_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DiseaseMasters') ? [] : ['className' => DiseaseMastersTable::class];
        $this->DiseaseMasters = TableRegistry::get('DiseaseMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DiseaseMasters);

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
