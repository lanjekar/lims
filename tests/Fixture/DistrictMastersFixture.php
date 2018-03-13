<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DistrictMastersFixture
 *
 */
class DistrictMastersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'district_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'state_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'district_name' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created_on' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified_on' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => '0000-00-00 00:00:00', 'comment' => '', 'precision' => null],
        'modified_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'state_id_fk' => ['type' => 'index', 'columns' => ['state_id'], 'length' => []],
            'created_by_dist_fk' => ['type' => 'index', 'columns' => ['created_by'], 'length' => []],
            'modified_by_dist_fk' => ['type' => 'index', 'columns' => ['modified_by'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['district_id'], 'length' => []],
            'created_by_dist_fk' => ['type' => 'foreign', 'columns' => ['created_by'], 'references' => ['users', 'user_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'modified_by_dist_fk' => ['type' => 'foreign', 'columns' => ['modified_by'], 'references' => ['users', 'user_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'state_id_fk' => ['type' => 'foreign', 'columns' => ['state_id'], 'references' => ['state_masters', 'state_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
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
            'district_id' => 1,
            'state_id' => 1,
            'district_name' => 'Lorem ipsum dolor sit amet',
            'created_on' => 1520938046,
            'created_by' => 1,
            'modified_on' => 1520938046,
            'modified_by' => 1
        ],
    ];
}
