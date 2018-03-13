<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DiseaseMasters Model
 *
 * @method \App\Model\Entity\DiseaseMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\DiseaseMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DiseaseMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DiseaseMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DiseaseMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DiseaseMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DiseaseMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class DiseaseMastersTable extends Table
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

        $this->setTable('disease_masters');
        $this->setDisplayField('disease_id');
        $this->setPrimaryKey('disease_id');
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
            ->integer('disease_id')
            ->allowEmpty('disease_id', 'create');

        $validator
            ->scalar('disease_name')
            ->maxLength('disease_name', 30)
            ->requirePresence('disease_name', 'create')
            ->notEmpty('disease_name');

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
