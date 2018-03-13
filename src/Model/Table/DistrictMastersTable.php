<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DistrictMasters Model
 *
 * @property \App\Model\Table\StateMastersTable|\Cake\ORM\Association\BelongsTo $StateMasters
 *
 * @method \App\Model\Entity\DistrictMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\DistrictMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DistrictMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DistrictMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DistrictMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DistrictMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DistrictMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class DistrictMastersTable extends Table
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

        $this->setTable('district_masters');
        $this->setDisplayField('district_id');
        $this->setPrimaryKey('district_id');

        $this->belongsTo('StateMasters', [
            'foreignKey' => 'state_id',
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
            ->integer('district_id')
            ->allowEmpty('district_id', 'create');

        $validator
            ->scalar('district_name')
            ->maxLength('district_name', 30)
            ->requirePresence('district_name', 'create')
            ->notEmpty('district_name');

        $validator
            ->dateTime('created_on')
            ->requirePresence('created_on', 'create')
            ->notEmpty('created_on');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->dateTime('modified_on')
            ->requirePresence('modified_on', 'create')
            ->notEmpty('modified_on');

        $validator
            ->integer('modified_by')
            ->requirePresence('modified_by', 'create')
            ->notEmpty('modified_by');

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
        $rules->add($rules->existsIn(['state_id'], 'StateMasters'));

        return $rules;
    }
}
