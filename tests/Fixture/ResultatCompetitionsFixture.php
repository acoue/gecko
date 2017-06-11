<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResultatCompetitionsFixture
 *
 */
class ResultatCompetitionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'competition_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'licencie_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'resultat_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'competition_resultat_fk_idx' => ['type' => 'index', 'columns' => ['competition_id'], 'length' => []],
            'licencie_resultat_fk_idx' => ['type' => 'index', 'columns' => ['licencie_id'], 'length' => []],
            'resultat_resultat_fk_idx' => ['type' => 'index', 'columns' => ['resultat_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'resultat_uk' => ['type' => 'unique', 'columns' => ['resultat_id', 'competition_id', 'licencie_id'], 'length' => []],
            'competition_resultat_fk' => ['type' => 'foreign', 'columns' => ['competition_id'], 'references' => ['competitions', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'licencie_resultat_fk' => ['type' => 'foreign', 'columns' => ['licencie_id'], 'references' => ['licencies', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'resultat_resultat_fk' => ['type' => 'foreign', 'columns' => ['resultat_id'], 'references' => ['resultats', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'competition_id' => 1,
            'licencie_id' => 1,
            'resultat_id' => 1
        ],
    ];
}
