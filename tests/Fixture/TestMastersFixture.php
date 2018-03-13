<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestMastersFixture
 *
 */
class TestMastersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'test_list_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'test_name' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created_on' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified_on' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'created_by_testm_fk' => ['type' => 'index', 'columns' => ['created_by'], 'length' => []],
            'test_master_testm_1' => ['type' => 'index', 'columns' => ['modified_by'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['test_list_id'], 'length' => []],
            'created_by_testm_fk' => ['type' => 'foreign', 'columns' => ['created_by'], 'references' => ['users', 'user_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'test_master_testm_1' => ['type' => 'foreign', 'columns' => ['modified_by'], 'references' => ['users', 'user_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'test_list_id' => 1,
            'test_name' => 'Lorem ipsum dolor sit amet',
            'created_on' => '2018-03-13 10:52:48',
            'created_by' => 1,
            'modified_on' => '2018-03-13 10:52:48',
            'modified_by' => 1
        ],
    ];
}
