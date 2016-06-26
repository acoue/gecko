<?php
namespace App\Model\Table;

use App\Model\Entity\Repartition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Repartitions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Competitions
 * @property \Cake\ORM\Association\BelongsTo $Licencies
 */
class RepartitionsTable extends Table
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

        $this->table('repartitions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Competitions', [
            'foreignKey' => 'competition_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Licencies', [
            'foreignKey' => 'licencie_id',
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
            ->integer('numero_poule')
            ->requirePresence('numero_poule', 'create')
            ->notEmpty('numero_poule');

        $validator
            ->integer('position_poule')
            ->requirePresence('position_poule', 'create')
            ->notEmpty('position_poule');

        $validator
            ->integer('resultat_combat')
            ->requirePresence('resultat_combat', 'create')
            ->notEmpty('resultat_combat');

        $validator
            ->integer('point_combat')
            ->requirePresence('point_combat', 'create')
            ->notEmpty('point_combat');

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
        $rules->add($rules->existsIn(['licencie_id'], 'Licencies'));
        return $rules;
    }
}
