<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleRegistrations Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\StateMastersTable|\Cake\ORM\Association\BelongsTo $StateMasters
 * @property \App\Model\Table\DistrictMastersTable|\Cake\ORM\Association\BelongsTo $DistrictMasters
 * @property \App\Model\Table\DispatchMastersTable|\Cake\ORM\Association\BelongsTo $DispatchMasters
 *
 * @method \App\Model\Entity\SampleRegistration get($primaryKey, $options = [])
 * @method \App\Model\Entity\SampleRegistration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SampleRegistration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SampleRegistration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SampleRegistration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SampleRegistration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SampleRegistration findOrCreate($search, callable $callback = null, $options = [])
 */
class SampleRegistrationsTable extends Table
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

        $this->setTable('sample_registrations');
        $this->setDisplayField('sample_reg_id');
        $this->setPrimaryKey('sample_reg_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('StateMasters', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DistrictMasters', [
            'foreignKey' => 'district_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('DispatchMasters', [
            'foreignKey' => 'dispatch_id',
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
            ->integer('sample_reg_id')
            ->allowEmpty('sample_reg_id', 'create');

        $validator
            ->integer('yearly_sample_no')
            ->requirePresence('yearly_sample_no', 'create')
            ->notEmpty('yearly_sample_no');

        $validator
            ->integer('monthly_sample_no')
            ->requirePresence('monthly_sample_no', 'create')
            ->notEmpty('monthly_sample_no');

        $validator
            ->dateTime('date_of_recevied')
            ->requirePresence('date_of_recevied', 'create')
            ->notEmpty('date_of_recevied');

        $validator
            ->dateTime('date_of_registration')
            ->requirePresence('date_of_registration', 'create')
            ->notEmpty('date_of_registration');

        $validator
            ->scalar('institute_name')
            ->maxLength('institute_name', 30)
            ->requirePresence('institute_name', 'create')
            ->notEmpty('institute_name');

        $validator
            ->scalar('owner_name')
            ->maxLength('owner_name', 30)
            ->requirePresence('owner_name', 'create')
            ->notEmpty('owner_name');

        $validator
            ->scalar('owner_address')
            ->maxLength('owner_address', 90)
            ->requirePresence('owner_address', 'create')
            ->notEmpty('owner_address');

        $validator
            ->scalar('owner_mobile')
            ->maxLength('owner_mobile', 11)
            ->requirePresence('owner_mobile', 'create')
            ->notEmpty('owner_mobile');

        $validator
            ->scalar('owner_email')
            ->maxLength('owner_email', 30)
            ->requirePresence('owner_email', 'create')
            ->notEmpty('owner_email');

        $validator
            ->scalar('letter_no')
            ->maxLength('letter_no', 30)
            ->requirePresence('letter_no', 'create')
            ->notEmpty('letter_no');

        $validator
            ->dateTime('letter_date')
            ->requirePresence('letter_date', 'create')
            ->notEmpty('letter_date');

        $validator
            ->integer('no_of_samples')
            ->requirePresence('no_of_samples', 'create')
            ->notEmpty('no_of_samples');

        $validator
            ->numeric('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        $validator
            ->scalar('receipt_no')
            ->maxLength('receipt_no', 30)
            ->requirePresence('receipt_no', 'create')
            ->notEmpty('receipt_no');

        $validator
            ->dateTime('receipt_date')
            ->requirePresence('receipt_date', 'create')
            ->notEmpty('receipt_date');

        $validator
            ->scalar('out_no')
            ->maxLength('out_no', 11)
            ->requirePresence('out_no', 'create')
            ->notEmpty('out_no');

        $validator
            ->dateTime('out_date')
            ->requirePresence('out_date', 'create')
            ->notEmpty('out_date');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['state_id'], 'StateMasters'));
        $rules->add($rules->existsIn(['district_id'], 'DistrictMasters'));
        $rules->add($rules->existsIn(['dispatch_id'], 'DispatchMasters'));

        return $rules;
    }
}
