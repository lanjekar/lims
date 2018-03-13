<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StateMasters Model
 *
 * @method \App\Model\Entity\StateMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\StateMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StateMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StateMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StateMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StateMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StateMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class StateMastersTable extends Table
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

        $this->setTable('state_masters');
        $this->setDisplayField('state_id');
        $this->setPrimaryKey('state_id');
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
            ->integer('state_id')
            ->allowEmpty('state_id', 'create');

        $validator
            ->scalar('state_name')
            ->maxLength('state_name', 30)
            ->requirePresence('state_name', 'create')
            ->notEmpty('state_name');

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
