<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jiraissue Model
 *
 * @method \App\Model\Entity\Jiraissue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jiraissue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jiraissue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jiraissue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jiraissue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jiraissue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jiraissue findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JiraissueTable extends Table
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

        $this->setTable('jiraissue');
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
            ->decimal('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('pkey');

        $validator
            ->decimal('issuenum')
            ->allowEmpty('issuenum');

        $validator
            ->decimal('project')
            ->allowEmpty('project');

        $validator
            ->allowEmpty('reporter');

        $validator
            ->allowEmpty('assignee');

        $validator
            ->allowEmpty('creator');

        $validator
            ->allowEmpty('issuetype');

        $validator
            ->allowEmpty('summary');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('environment');

        $validator
            ->allowEmpty('priority');

        $validator
            ->allowEmpty('resolution');

        $validator
            ->allowEmpty('issuestatus');

        $validator
            ->dateTime('duedate')
            ->allowEmpty('duedate');

        $validator
            ->dateTime('resolutiondate')
            ->allowEmpty('resolutiondate');

        $validator
            ->decimal('votes')
            ->allowEmpty('votes');

        $validator
            ->decimal('watches')
            ->allowEmpty('watches');

        $validator
            ->decimal('timeoriginalestimate')
            ->allowEmpty('timeoriginalestimate');

        $validator
            ->decimal('timeestimate')
            ->allowEmpty('timeestimate');

        $validator
            ->decimal('timespent')
            ->allowEmpty('timespent');

        $validator
            ->decimal('security')
            ->allowEmpty('security');

        $validator
            ->decimal('fixfor')
            ->allowEmpty('fixfor');

        $validator
            ->decimal('component')
            ->allowEmpty('component');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
     /*
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['workflow_id'], 'Workflows'));

        return $rules;
    }
    */
}
