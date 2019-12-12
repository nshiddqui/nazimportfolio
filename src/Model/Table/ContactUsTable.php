<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactUs Model
 *
 * @method \App\Model\Entity\ContactU get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactU newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContactU[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactU|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactU saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactU patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactU[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactU findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContactUsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('contact_us');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmptyString('id', null, 'create');

        $validator
                ->scalar('name')
                ->maxLength('name', 255)
                ->requirePresence('name', 'create')
                ->notEmptyString('name');

        $validator
                ->email('email')
                ->requirePresence('email', 'create')
                ->notEmptyString('email');

        $validator
                ->scalar('message')
                ->requirePresence('message', 'create')
                ->notEmptyString('message');

        $validator
                ->scalar('ip')
                ->maxLength('ip', 255)
                ->requirePresence('ip', 'create')
                ->notEmptyString('ip');

        $validator
                ->scalar('referer')
                ->maxLength('referer', 255)
                ->requirePresence('referer', 'create')
                ->notEmptyString('referer');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        return $rules;
    }

}
