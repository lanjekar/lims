<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BreedMastersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BreedMastersTable Test Case
 */
class BreedMastersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BreedMastersTable
     */
    public $BreedMasters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.breed_masters',
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
        $config = TableRegistry::exists('BreedMasters') ? [] : ['className' => BreedMastersTable::class];
        $this->BreedMasters = TableRegistry::get('BreedMasters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BreedMasters);

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
