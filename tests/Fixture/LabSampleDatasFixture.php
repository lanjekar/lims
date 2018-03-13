<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LabSampleDatasFixture
 *
 */
class LabSampleDatasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'sample_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sample_reg_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lab_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tag_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'species_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'breed_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sample_list_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sex' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => 'M', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'age' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'post_mortum' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'doc_name' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_type' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'doc_size' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'yearly_lab_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monthly_lab_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'test_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'instruction_by_level_1' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'instruction_by_level_2' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'instruction_by_level_3' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'sample_reg_id_fk' => ['type' => 'index', 'columns' => ['sample_reg_id'], 'length' => []],
            'test_id_fk' => ['type' => 'index', 'columns' => ['test_id'], 'length' => []],
            'lab_id_lsd_fk' => ['type' => 'index', 'columns' => ['lab_id'], 'length' => []],
            'species_id_lsd_fk' => ['type' => 'index', 'columns' => ['species_id'], 'length' => []],
            'breed_id_lsd_fk' => ['type' => 'index', 'columns' => ['breed_id'], 'length' => []],
            'sample_list_id_lsd_fk' => ['type' => 'index', 'columns' => ['sample_list_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['sample_id'], 'length' => []],
            'breed_id_lsd_fk' => ['type' => 'foreign', 'columns' => ['breed_id'], 'references' => ['breed_masters', 'breed_id'], 'update' => 'restrict', 'delete' => 'noAction', 'length' => []],
            'lab_id_lsd_fk' => ['type' => 'foreign', 'columns' => ['lab_id'], 'references' => ['lab_masters', 'lab_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'sample_list_id_lsd_fk' => ['type' => 'foreign', 'columns' => ['sample_list_id'], 'references' => ['sample_masters', 'sample_list_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'sample_reg_id_fk' => ['type' => 'foreign', 'columns' => ['sample_reg_id'], 'references' => ['sample_registrations', 'sample_reg_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'species_id_lsd_fk' => ['type' => 'foreign', 'columns' => ['species_id'], 'references' => ['species_masters', 'species_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'test_id_fk' => ['type' => 'foreign', 'columns' => ['test_id'], 'references' => ['sample_applicable_tests', 'test_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
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
            'sample_id' => 1,
            'sample_reg_id' => 1,
            'lab_id' => 1,
            'tag_no' => 1,
            'species_id' => 1,
            'breed_id' => 1,
            'sample_list_id' => 1,
            'sex' => 'Lorem ipsum dolor sit amet',
            'age' => 1,
            'post_mortum' => 1,
            'doc_name' => 'Lorem ipsum dolor sit amet',
            'doc_type' => 'Lorem ipsum dolor ',
            'doc_size' => 'Lorem ipsum dolor sit amet',
            'yearly_lab_no' => 1,
            'monthly_lab_no' => 1,
            'test_id' => 1,
            'instruction_by_level_1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'instruction_by_level_2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'instruction_by_level_3' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
        ],
    ];
}
