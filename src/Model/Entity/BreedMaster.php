<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BreedMaster Entity
 *
 * @property int $breed_id
 * @property int $species_id
 * @property string $breed_name
 * @property \Cake\I18n\FrozenTime $created_on
 * @property int $created_by
 * @property \Cake\I18n\FrozenTime $modified_on
 * @property int $modified_by
 *
 * @property \App\Model\Entity\SpeciesMaster $species_master
 */
class BreedMaster extends Entity
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
        'species_id' => true,
        'breed_name' => true,
        'created_on' => true,
        'created_by' => true,
        'modified_on' => true,
        'modified_by' => true,
        'species_master' => true
    ];
}
