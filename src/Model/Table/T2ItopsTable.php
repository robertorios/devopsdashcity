<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * T2Itops Model
 *
 * @method \App\Model\Entity\T2Itop get($primaryKey, $options = [])
 * @method \App\Model\Entity\T2Itop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\T2Itop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\T2Itop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\T2Itop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\T2Itop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\T2Itop findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class T2ItopsTable extends Table
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

        $this->setTable('t2_itops');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('assignee');

        $validator
            ->allowEmpty('component');

        $validator
            ->allowEmpty('duedate');

        $validator
            ->allowEmpty('issue_desc');

        $validator
            ->allowEmpty('issue_type');

        $validator
            ->allowEmpty('issuenum');

        $validator
            ->allowEmpty('item_type_desc');

        $validator
            ->allowEmpty('priority');

        $validator
            ->allowEmpty('project_desc');

        $validator
            ->allowEmpty('project_key');

        $validator
            ->allowEmpty('project_name');

        $validator
            ->allowEmpty('project_type');

        $validator
            ->allowEmpty('reporter');

        $validator
            ->allowEmpty('resolution_desc');

        $validator
            ->allowEmpty('resolution_type');

        $validator
            ->allowEmpty('resolutiondate');

        $validator
            ->allowEmpty('sequence');

        $validator
            ->allowEmpty('status_desc');

        $validator
            ->allowEmpty('status_type');

        $validator
            ->allowEmpty('_desc_substring');

        $validator
            ->allowEmpty('_resolve_days_taken');

        $validator
            ->allowEmpty('fme_rejection_code');

        $validator
            ->allowEmpty('geom');

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }
}
