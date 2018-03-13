<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SampleRegistration Entity
 *
 * @property int $sample_reg_id
 * @property int $user_id
 * @property int $yearly_sample_no
 * @property int $monthly_sample_no
 * @property \Cake\I18n\FrozenTime $date_of_recevied
 * @property \Cake\I18n\FrozenTime $date_of_registration
 * @property string $institute_name
 * @property string $owner_name
 * @property string $owner_address
 * @property string $owner_mobile
 * @property string $owner_email
 * @property int $state_id
 * @property int $district_id
 * @property int $dispatch_id
 * @property string $letter_no
 * @property \Cake\I18n\FrozenTime $letter_date
 * @property int $no_of_samples
 * @property float $amount
 * @property string $receipt_no
 * @property \Cake\I18n\FrozenTime $receipt_date
 * @property string $out_no
 * @property \Cake\I18n\FrozenTime $out_date
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\StateMaster $state_master
 * @property \App\Model\Entity\DistrictMaster $district_master
 * @property \App\Model\Entity\DispatchMaster $dispatch_master
 */
class SampleRegistration extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'yearly_sample_no' => true,
        'monthly_sample_no' => true,
        'date_of_recevied' => true,
        'date_of_registration' => true,
        'institute_name' => true,
        'owner_name' => true,
        'owner_address' => true,
        'owner_mobile' => true,
        'owner_email' => true,
        'state_id' => true,
        'district_id' => true,
        'dispatch_id' => true,
        'letter_no' => true,
        'letter_date' => true,
        'no_of_samples' => true,
        'amount' => true,
        'receipt_no' => true,
        'receipt_date' => true,
        'out_no' => true,
        'out_date' => true,
        'user' => true,
        'state_master' => true,
        'district_master' => true,
        'dispatch_master' => true
    ];
}
