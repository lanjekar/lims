<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SampleRegistrationsFixture
 *
 */
class SampleRegistrationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'sample_reg_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'yearly_sample_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monthly_sample_no' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date_of_recevied' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'date_of_registration' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'institute_name' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'owner_name' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'owner_address' => ['type' => 'string', 'length' => 90, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'owner_mobile' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'owner_email' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'state_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'district_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dispatch_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'letter_no' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'letter_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'no_of_samples' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'amount' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'receipt_no' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'receipt_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'out_no' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'out_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'user_id_fk' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'state_sm_fk' => ['type' => 'index', 'columns' => ['state_id'], 'length' => []],
            'district_id_sr_fk' => ['type' => 'index', 'columns' => ['district_id'], 'length' => []],
            'dispatch_id_sr_fk' => ['type' => 'index', 'columns' => ['dispatch_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['sample_reg_id'], 'length' => []],
            'dispatch_id_sr_fk' => ['type' => 'foreign', 'columns' => ['dispatch_id'], 'references' => ['dispatch_masters', 'dispatch_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'district_id_sr_fk' => ['type' => 'foreign', 'columns' => ['district_id'], 'references' => ['district_masters', 'district_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'state_sm_fk' => ['type' => 'foreign', 'columns' => ['state_id'], 'references' => ['state_masters', 'state_id'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'user_id_fk' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'user_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'sample_reg_id' => 1,
            'user_id' => 1,
            'yearly_sample_no' => 1,
            'monthly_sample_no' => 1,
            'date_of_recevied' => '2018-03-13 10:50:43',
            'date_of_registration' => '2018-03-13 10:50:43',
            'institute_name' => 'Lorem ipsum dolor sit amet',
            'owner_name' => 'Lorem ipsum dolor sit amet',
            'owner_address' => 'Lorem ipsum dolor sit amet',
            'owner_mobile' => 'Lorem ips',
            'owner_email' => 'Lorem ipsum dolor sit amet',
            'state_id' => 1,
            'district_id' => 1,
            'dispatch_id' => 1,
            'letter_no' => 'Lorem ipsum dolor sit amet',
            'letter_date' => '2018-03-13 10:50:43',
            'no_of_samples' => 1,
            'amount' => 1,
            'receipt_no' => 'Lorem ipsum dolor sit amet',
            'receipt_date' => '2018-03-13 10:50:43',
            'out_no' => 'Lorem ips',
            'out_date' => '2018-03-13 10:50:43'
        ],
    ];
}
