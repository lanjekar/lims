<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LabMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LabMastersTable Test Case
 */
class LabMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LabMastersTable
     */
    public $LabMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lab_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LabMasters') ? [] : ['className' => LabMastersTable::class];
        $this->LabMasters = TableRegistry::get('LabMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LabMasters);

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
