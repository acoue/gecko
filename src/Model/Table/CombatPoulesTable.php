<?php
namespace App\Model\Table;

use App\Model\Entity\CombatPoule;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CombatPoules Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Competitions
 */
class CombatPoulesTable extends Table
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

        $this->table('combat_poules');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Competitions', [
            'foreignKey' => 'competition_id',
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
            ->integer('poule')
            ->requirePresence('poule', 'create')
            ->notEmpty('poule');

        $validator
            ->integer('ordre')
            ->requirePresence('ordre', 'create')
            ->notEmpty('ordre');

        $validator
            ->integer('licencie1')
            ->requirePresence('licencie1', 'create')
            ->notEmpty('licencie1');

        $validator
            ->integer('licencie2')
            ->requirePresence('licencie2', 'create')
            ->notEmpty('licencie2');

        $validator
            ->allowEmpty('resultat_rouge');

        $validator
            ->allowEmpty('resultat_blanc');

        $validator
            ->integer('vainqueur')
            ->allowEmpty('vainqueur');

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
        $rules->add($rules->existsIn(['competition_id'], 'Competitions'));
        return $rules;
    }
}
