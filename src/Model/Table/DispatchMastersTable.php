<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DispatchMasters Model
 *
 * @method \App\Model\Entity\DispatchMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\DispatchMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DispatchMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DispatchMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DispatchMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DispatchMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DispatchMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class DispatchMastersTable extends Table
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

        $this->setTable('dispatch_masters');
        $this->setDisplayField('dispatch_id');
        $this->setPrimaryKey('dispatch_id');
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
            ->integer('dispatch_id')
            ->allowEmpty('dispatch_id', 'create');

        $validator
            ->scalar('dispatch_type')
            ->maxLength('dispatch_type', 30)
            ->requirePresence('dispatch_type', 'create')
            ->notEmpty('dispatch_type');

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
