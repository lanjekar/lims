<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LabSampleData Entity
 *
 * @property int $sample_id
 * @property int $sample_reg_id
 * @property int $lab_id
 * @property int $tag_no
 * @property int $species_id
 * @property int $breed_id
 * @property int $sample_list_id
 * @property string $sex
 * @property int $age
 * @property bool $post_mortum
 * @property string $doc_name
 * @property string $doc_type
 * @property string $doc_size
 * @property int $yearly_lab_no
 * @property int $monthly_lab_no
 * @property int $test_id
 * @property string $instruction_by_level_1
 * @property string $instruction_by_level_2
 * @property string $instruction_by_level_3
 *
 * @property \App\Model\Entity\SampleRegistration $sample_registration
 * @property \App\Model\Entity\LabMaster $lab_master
 * @property \App\Model\Entity\SpeciesMaster $species_master
 * @property \App\Model\Entity\BreedMaster $breed_master
 * @property \App\Model\Entity\SampleMaster $sample_master
 * @property \App\Model\Entity\SampleApplicableTest $sample_applicable_test
 */
class LabSampleData extends Entity
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
        'sample_reg_id' => true,
        'lab_id' => true,
        'tag_no' => true,
        'species_id' => true,
        'breed_id' => true,
        'sample_list_id' => true,
        'sex' => true,
        'age' => true,
        'post_mortum' => true,
        'doc_name' => true,
        'doc_type' => true,
        'doc_size' => true,
        'yearly_lab_no' => true,
        'monthly_lab_no' => true,
        'test_id' => true,
        'instruction_by_level_1' => true,
        'instruction_by_level_2' => true,
        'instruction_by_level_3' => true,
        'sample_registration' => true,
        'lab_master' => true,
        'species_master' => true,
        'breed_master' => true,
        'sample_master' => true,
        'sample_applicable_test' => true
    ];
}
