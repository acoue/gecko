<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResultatCompetitions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Competitions
 * @property \Cake\ORM\Association\BelongsTo $Licencies
 * @property \Cake\ORM\Association\BelongsTo $Resultats
 *
 * @method \App\Model\Entity\ResultatCompetition get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResultatCompetition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ResultatCompetition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResultatCompetition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResultatCompetition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResultatCompetition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResultatCompetition findOrCreate($search, callable $callback = null)
 */
class ResultatCompetitionsTable extends Table
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

        $this->table('resultat_competitions');
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
        $this->belongsTo('Resultats', [
            'foreignKey' => 'resultat_id',
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
        $rules->add($rules->existsIn(['resultat_id'], 'Resultats'));

        return $rules;
    }
}
