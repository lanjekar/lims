<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TestMasters Model
 *
 * @method \App\Model\Entity\TestMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\TestMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TestMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TestMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TestMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TestMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TestMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class TestMastersTable extends Table
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

        $this->setTable('test_masters');
        $this->setDisplayField('test_list_id');
        $this->setPrimaryKey('test_list_id');
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
            ->integer('test_list_id')
            ->allowEmpty('test_list_id', 'create');

        $validator
            ->scalar('test_name')
            ->maxLength('test_name', 30)
            ->requirePresence('test_name', 'create')
            ->notEmpty('test_name');

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
