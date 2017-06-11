<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Juges Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Passages
 * @property \Cake\ORM\Association\BelongsTo $Jurys
 * @property \Cake\ORM\Association\HasMany $Notes
 *
 * @method \App\Model\Entity\Juge get($primaryKey, $options = [])
 * @method \App\Model\Entity\Juge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Juge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Juge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Juge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Juge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Juge findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JugesTable extends Table
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

        $this->table('juges');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Passages', [
            'foreignKey' => 'passage_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Jurys', [
            'foreignKey' => 'jury_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'juge_id'
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
        $rules->add($rules->existsIn(['jury_id'], 'Jurys'));
        $rules->add($rules->existsIn(['passage_id'], 'Passages'));

        return $rules;
    }
}
