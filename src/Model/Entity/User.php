<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;


/**
 * User Entity
 *
 * @property int $user_id
 * @property string $username
 * @property string $password
 * @property int $lab_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $mobile
 * @property string $user_role
 * @property int $state_id
 * @property int $district_id
 * @property bool $is_active
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $created_on
 * @property int $modified_by
 * @property \Cake\I18n\FrozenTime $modified_on
 *
 * @property \App\Model\Entity\LabMaster $lab_master
 * @property \App\Model\Entity\StateMaster $state_master
 * @property \App\Model\Entity\DistrictMaster $district_master
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'lab_id' => true,
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'mobile' => true,
        'user_role' => true,
        'state_id' => true,
        'district_id' => true,
        'is_active' => true,
        'created_by' => true,
        'created_on' => true,
        'modified_by' => true,
        'modified_on' => true,
        'lab_master' => true,
        'state_master' => true,
        'district_master' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    
    protected function _setPassword($password)
    {
        if(strlen($password) > 0){
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
