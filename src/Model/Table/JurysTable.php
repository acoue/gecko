<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jurys Model
 *
 * @property \Cake\ORM\Association\HasMany $Juges
 *
 * @method \App\Model\Entity\Jury get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jury newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jury[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jury|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jury patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jury[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jury findOrCreate($search, callable $callback = null)
 */
class JurysTable extends Table
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

        $this->table('jurys');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Juges', [
            'foreignKey' => 'jury_id'
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
            ->requirePresence('nom', 'create')
            ->notEmpty('nom');

        $validator
            ->requirePresence('prenom', 'create')
            ->notEmpty('prenom');

        $validator
            ->requirePresence('grade', 'create')
            ->notEmpty('grade');

        $validator
            ->integer('actif')
            ->requirePresence('actif', 'create')
            ->notEmpty('actif');

        return $validator;
    }
}
