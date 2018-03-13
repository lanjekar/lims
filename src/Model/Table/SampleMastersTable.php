<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleMasters Model
 *
 * @method \App\Model\Entity\SampleMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\SampleMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SampleMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SampleMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SampleMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SampleMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SampleMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class SampleMastersTable extends Table
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

        $this->setTable('sample_masters');
        $this->setDisplayField('sample_list_id');
        $this->setPrimaryKey('sample_list_id');
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
            ->integer('sample_list_id')
            ->allowEmpty('sample_list_id', 'create');

        $validator
            ->scalar('sample_name')
            ->maxLength('sample_name', 30)
            ->requirePresence('sample_name', 'create')
            ->notEmpty('sample_name');

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
}
