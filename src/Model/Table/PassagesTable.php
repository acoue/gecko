<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Passages Model
 *
 * @property \Cake\ORM\Association\HasMany $Evalues
 * @property \Cake\ORM\Association\HasMany $InscriptionPassages
 * @property \Cake\ORM\Association\HasMany $Juges
 * @property \Cake\ORM\Association\HasMany $Notes
 *
 * @method \App\Model\Entity\Passage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Passage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Passage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Passage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Passage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Passage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Passage findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PassagesTable extends Table
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

        $this->table('passages');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Evalues', [
            'foreignKey' => 'passage_id'
        ]);
        $this->hasMany('InscriptionPassages', [
            'foreignKey' => 'passage_id'
        ]);
        $this->hasMany('Juges', [
            'foreignKey' => 'passage_id'
        ]);
        $this->hasMany('Notes', [
            'foreignKey' => 'passage_id'
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
            ->date('date_passage')
            ->requirePresence('date_passage', 'create')
            ->notEmpty('date_passage');

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
}
