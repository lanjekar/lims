<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpeciesMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpeciesMastersTable Test Case
 */
class SpeciesMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SpeciesMastersTable
     */
    public $SpeciesMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.species_masters'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SpeciesMasters') ? [] : ['className' => SpeciesMastersTable::class];
        $this->SpeciesMasters = TableRegistry::get('SpeciesMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SpeciesMasters);

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
