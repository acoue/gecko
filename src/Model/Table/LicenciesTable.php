<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Licencies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Grades
 * @property \Cake\ORM\Association\BelongsTo $Clubs
 *
 * @method \App\Model\Entity\Licency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Licency newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Licency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Licency|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Licency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Licency[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Licency findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LicenciesTable extends Table
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

        $this->table('licencies');
        $this->displayField('display_name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Grades', [
            'foreignKey' => 'grade_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clubs', [
            'foreignKey' => 'club_id',
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
            ->requirePresence('prenom', 'create')
            ->notEmpty('prenom');

        $validator
            ->requirePresence('nom', 'create')
            ->notEmpty('nom');

        $validator
            ->allowEmpty('sexe');

        $validator
            ->date('ddn')
            ->allowEmpty('ddn');

        $validator
            ->allowEmpty('licence');

        $validator
            ->requirePresence('display_name', 'create')
            ->notEmpty('display_name');

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
        $rules->add($rules->existsIn(['grade_id'], 'Grades'));
        $rules->add($rules->existsIn(['club_id'], 'Clubs'));

        return $rules;
    }
}
