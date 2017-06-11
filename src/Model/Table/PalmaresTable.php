<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Palmares Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Resultats
 * @property \Cake\ORM\Association\BelongsTo $Licencies
 *
 * @method \App\Model\Entity\Palmare get($primaryKey, $options = [])
 * @method \App\Model\Entity\Palmare newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Palmare[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Palmare|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Palmare patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Palmare[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Palmare findOrCreate($search, callable $callback = null)
 */
class PalmaresTable extends Table
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

        $this->table('palmares');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Resultats', [
            'foreignKey' => 'resultat_id',
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
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('competition', 'create')
            ->notEmpty('competition');

        $validator
            ->allowEmpty('lieux');

        $validator
            ->date('date_competition')
            ->requirePresence('date_competition', 'create')
            ->notEmpty('date_competition');

        $validator
            ->allowEmpty('commentaire');

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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['resultat_id'], 'Resultats'));
        $rules->add($rules->existsIn(['licencie_id'], 'Licencies'));

        return $rules;
    }
}
