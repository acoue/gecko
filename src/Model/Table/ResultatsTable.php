<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Resultats Model
 *
 * @property \Cake\ORM\Association\HasMany $ResultatCompetitions
 *
 * @method \App\Model\Entity\Resultat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Resultat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Resultat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Resultat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Resultat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Resultat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Resultat findOrCreate($search, callable $callback = null)
 */
class ResultatsTable extends Table
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

        $this->table('resultats');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('ResultatCompetitions', [
            'foreignKey' => 'resultat_id'
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

        return $validator;
    }
}
