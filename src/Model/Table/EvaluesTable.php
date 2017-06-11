<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Evalues Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Passages
 * @property \Cake\ORM\Association\BelongsTo $Licencies
 * @property \Cake\ORM\Association\BelongsTo $Grades
 * @property \Cake\ORM\Association\BelongsTo $Grades
 *
 * @method \App\Model\Entity\Evalue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Evalue newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Evalue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evalue|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evalue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Evalue[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evalue findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EvaluesTable extends Table
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

        $this->table('evalues');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Passages', [
            'foreignKey' => 'passage_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Licencies', [
            'foreignKey' => 'licencie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Grades', [
            'foreignKey' => 'grade_actuel_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Grades', [
            'foreignKey' => 'grade_presente_id',
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
            ->integer('numero')
            ->allowEmpty('numero');

        $validator
            ->integer('resultat_passage')
            ->allowEmpty('resultat_passage');

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
        $rules->add($rules->existsIn(['passage_id'], 'Passages'));
        $rules->add($rules->existsIn(['licencie_id'], 'Licencies'));
        $rules->add($rules->existsIn(['grade_actuel_id'], 'Grades'));
        $rules->add($rules->existsIn(['grade_presente_id'], 'Grades'));

        return $rules;
    }
}
