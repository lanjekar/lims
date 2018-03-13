<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LabSampleDatas Model
 *
 * @property \App\Model\Table\SampleRegistrationsTable|\Cake\ORM\Association\BelongsTo $SampleRegistrations
 * @property \App\Model\Table\LabMastersTable|\Cake\ORM\Association\BelongsTo $LabMasters
 * @property \App\Model\Table\SpeciesMastersTable|\Cake\ORM\Association\BelongsTo $SpeciesMasters
 * @property \App\Model\Table\BreedMastersTable|\Cake\ORM\Association\BelongsTo $BreedMasters
 * @property \App\Model\Table\SampleMastersTable|\Cake\ORM\Association\BelongsTo $SampleMasters
 * @property \App\Model\Table\SampleApplicableTestsTable|\Cake\ORM\Association\BelongsTo $SampleApplicableTests
 *
 * @method \App\Model\Entity\LabSampleData get($primaryKey, $options = [])
 * @method \App\Model\Entity\LabSampleData newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LabSampleData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LabSampleData|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LabSampleData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LabSampleData[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LabSampleData findOrCreate($search, callable $callback = null, $options = [])
 */
class LabSampleDatasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('lab_sample_datas');
        $this->setDisplayField('sample_id');
        $this->setPrimaryKey('sample_id');

        $this->belongsTo('SampleRegistrations', [
            'foreignKey' => 'sample_reg_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LabMasters', [
            'foreignKey' => 'lab_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SpeciesMasters', [
            'foreignKey' => 'species_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BreedMasters', [
            'foreignKey' => 'breed_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SampleMasters', [
            'foreignKey' => 'sample_list_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SampleApplicableTests', [
            'foreignKey' => 'test_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('sample_id')
            ->allowEmpty('sample_id', 'create');

        $validator
            ->integer('tag_no')
            ->requirePresence('tag_no', 'create')
            ->notEmpty('tag_no');

        $validator
            ->scalar('sex')
            ->requirePresence('sex', 'create')
            ->notEmpty('sex');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->boolean('post_mortum')
            ->requirePresence('post_mortum', 'create')
            ->notEmpty('post_mortum');

        $validator
            ->scalar('doc_name')
            ->maxLength('doc_name', 30)
            ->requirePresence('doc_name', 'create')
            ->notEmpty('doc_name');

        $validator
            ->scalar('doc_type')
            ->maxLength('doc_type', 20)
            ->requirePresence('doc_type', 'create')
            ->notEmpty('doc_type');

        $validator
            ->scalar('doc_size')
            ->maxLength('doc_size', 30)
            ->requirePresence('doc_size', 'create')
            ->notEmpty('doc_size');

        $validator
            ->integer('yearly_lab_no')
            ->requirePresence('yearly_lab_no', 'create')
            ->notEmpty('yearly_lab_no');

        $validator
            ->integer('monthly_lab_no')
            ->requirePresence('monthly_lab_no', 'create')
            ->notEmpty('monthly_lab_no');

        $validator
            ->scalar('instruction_by_level_1')
            ->requirePresence('instruction_by_level_1', 'create')
            ->notEmpty('instruction_by_level_1');

        $validator
            ->scalar('instruction_by_level_2')
            ->requirePresence('instruction_by_level_2', 'create')
            ->notEmpty('instruction_by_level_2');

        $validator
            ->scalar('instruction_by_level_3')
            ->requirePresence('instruction_by_level_3', 'create')
            ->notEmpty('instruction_by_level_3');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['sample_reg_id'], 'SampleRegistrations'));
        $rules->add($rules->existsIn(['lab_id'], 'LabMasters'));
        $rules->add($rules->existsIn(['species_id'], 'SpeciesMasters'));
        $rules->add($rules->existsIn(['breed_id'], 'BreedMasters'));
        $rules->add($rules->existsIn(['sample_list_id'], 'SampleMasters'));
        $rules->add($rules->existsIn(['test_id'], 'SampleApplicableTests'));

        return $rules;
    }
}
