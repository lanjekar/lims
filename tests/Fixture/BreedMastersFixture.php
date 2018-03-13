<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BreedMastersFixture
 *
 */
class BreedMastersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'breed_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'species_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'breed_name' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created_on' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified_on' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'species_id_fk' => ['type' => 'index', 'columns' => ['species_id'], 'length' => []],
            'created_by_fk' => ['type' => 'index', 'columns' => ['created_by'], 'length' => []],
            'modified_by_fk' => ['type' => 'index', 'columns' => ['modified_by'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['breed_id'], 'length' => []],
            'created_by_fk' => ['type' => 'foreign', 'columns' => ['created_by'], 'references' => ['users', 'user_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'modified_by_fk' => ['type' => 'foreign', 'columns' => ['modified_by'], 'references' => ['users', 'user_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'species_id_fk' => ['type' => 'foreign', 'columns' => ['species_id'], 'references' => ['species_masters', 'species_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'breed_id' => 1,
            'species_id' => 1,
            'breed_name' => 'Lorem ipsum dolor sit amet',
            'created_on' => 1520937906,
            'created_by' => 1,
            'modified_on' => 1520937906,
            'modified_by' => 1
        ],
    ];
}
