<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Competitions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\HasMany $CombatPoules
 * @property \Cake\ORM\Association\HasMany $InscriptionCompetitions
 * @property \Cake\ORM\Association\HasMany $Repartitions
 * @property \Cake\ORM\Association\HasMany $ResultatPoules
 * @property \Cake\ORM\Association\HasMany $Tirages
 *
 * @method \App\Model\Entity\Competition get($primaryKey, $options = [])
 * @method \App\Model\Entity\Competition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Competition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Competition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Competition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Competition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Competition findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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
        $this->hasMany('CombatPoules', [
            'foreignKey' => 'competition_id'
        ]);
        $this->hasMany('InscriptionCompetitions', [
            'foreignKey' => 'competition_id'
        ]);
        $this->hasMany('Repartitions', [
            'foreignKey' => 'competition_id'
        ]);
        $this->hasMany('ResultatPoules', [
            'foreignKey' => 'competition_id'
        ]);
        $this->hasMany('Tirages', [
            'foreignKey' => 'competition_id'
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
            ->allowEmpty('description');

        $validator
            ->integer('type')
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->integer('selected')
            ->requirePresence('selected', 'create')
            ->notEmpty('selected');

        $validator
            ->integer('archive')
            ->requirePresence('archive', 'create')
            ->notEmpty('archive');

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
