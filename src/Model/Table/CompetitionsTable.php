<?php
namespace App\Model\Table;

use App\Model\Entity\Competition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Competitions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 */
class CompetitionsTable extends Table
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

        $this->table('competitions');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'catagorie_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->date('date_competition')
            ->requirePresence('date_competition', 'create')
            ->notEmpty('date_competition');

        $validator
            ->allowEmpty('lieux');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->date('type')
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->integer('selected')
            ->requirePresence('selected', 'create')
            ->notEmpty('selected');

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
        $rules->add($rules->existsIn(['catagorie_id'], 'Categories'));
        return $rules;
    }
}
