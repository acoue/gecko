<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InscriptionPassages Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Passages
 * @property \Cake\ORM\Association\BelongsTo $Licencies
 * @property \Cake\ORM\Association\BelongsTo $Grades
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\InscriptionPassage get($primaryKey, $options = [])
 * @method \App\Model\Entity\InscriptionPassage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InscriptionPassage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InscriptionPassage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InscriptionPassage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InscriptionPassage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InscriptionPassage findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InscriptionPassagesTable extends Table
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

        $this->table('inscription_passages');
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
            'foreignKey' => 'grade_presente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
        $rules->add($rules->existsIn(['passage_id'], 'Passages'));
        $rules->add($rules->existsIn(['licencie_id'], 'Licencies'));
        $rules->add($rules->existsIn(['grade_presente_id'], 'Grades'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
