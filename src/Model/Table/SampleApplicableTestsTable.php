<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleApplicableTests Model
 *
 * @property \App\Model\Table\SampleRegistrationsTable|\Cake\ORM\Association\BelongsTo $SampleRegistrations
 * @property \App\Model\Table\LabSampleDatasTable|\Cake\ORM\Association\BelongsTo $LabSampleDatas
 * @property \App\Model\Table\TestMastersTable|\Cake\ORM\Association\BelongsTo $TestMasters
 * @property \App\Model\Table\DiseaseMastersTable|\Cake\ORM\Association\BelongsTo $DiseaseMasters
 *
 * @method \App\Model\Entity\SampleApplicableTest get($primaryKey, $options = [])
 * @method \App\Model\Entity\SampleApplicableTest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SampleApplicableTest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SampleApplicableTest|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SampleApplicableTest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SampleApplicableTest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SampleApplicableTest findOrCreate($search, callable $callback = null, $options = [])
 */
class SampleApplicableTestsTable extends Table
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

        $this->setTable('sample_applicable_tests');
        $this->setDisplayField('test_id');
        $this->setPrimaryKey('test_id');

        $this->belongsTo('SampleRegistrations', [
            'foreignKey' => 'sample_reg_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LabSampleDatas', [
            'foreignKey' => 'sample_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TestMasters', [
            'foreignKey' => 'test_list_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DiseaseMasters', [
            'foreignKey' => 'disease_id',
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
            ->integer('test_id')
            ->allowEmpty('test_id', 'create');

        $validator
            ->dateTime('test_date')
            ->requirePresence('test_date', 'create')
            ->notEmpty('test_date');

        $validator
            ->scalar('test_result')
            ->requirePresence('test_result', 'create')
            ->notEmpty('test_result');

        $validator
            ->dateTime('observation_date')
            ->requirePresence('observation_date', 'create')
            ->notEmpty('observation_date');

        $validator
            ->scalar('observation_result')
            ->requirePresence('observation_result', 'create')
            ->notEmpty('observation_result');

        $validator
            ->dateTime('communication_date')
            ->requirePresence('communication_date', 'create')
            ->notEmpty('communication_date');

        $validator
            ->scalar('communication_result')
            ->requirePresence('communication_result', 'create')
            ->notEmpty('communication_result');

        $validator
            ->scalar('action_taken')
            ->maxLength('action_taken', 30)
            ->requirePresence('action_taken', 'create')
            ->notEmpty('action_taken');

        $validator
            ->scalar('test_suggestion')
            ->requirePresence('test_suggestion', 'create')
            ->notEmpty('test_suggestion');

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
        $rules->add($rules->existsIn(['sample_id'], 'LabSampleDatas'));
        $rules->add($rules->existsIn(['test_list_id'], 'TestMasters'));
        $rules->add($rules->existsIn(['disease_id'], 'DiseaseMasters'));

        return $rules;
    }
}
