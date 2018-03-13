<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DistrictMaster Entity
 *
 * @property int $district_id
 * @property int $state_id
 * @property string $district_name
 * @property \Cake\I18n\FrozenTime $created_on
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $modified_on
 * @property int $modified_by
 *
 * @property \App\Model\Entity\StateMaster $state_master
 */
class DistrictMaster extends Entity
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
        'state_id' => true,
        'district_name' => true,
        'created_on' => true,
        'created_by' => true,
        'modified_on' => true,
        'modified_by' => true,
        'state_master' => true
    ];
}
