<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EvaluesFixture
 *
 */
class EvaluesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'passage_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'licencie_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'grade_actuel_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'grade_presente_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numero' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'resultat_passage' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'grade_actuel_evalue_fk_idx' => ['type' => 'index', 'columns' => ['grade_actuel_id'], 'length' => []],
            'grade_presente_evalue_fk_idx' => ['type' => 'index', 'columns' => ['grade_presente_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'passage_evalue_fk_idx' => ['type' => 'unique', 'columns' => ['passage_id'], 'length' => []],
            'licencie_evalue_fk_idx' => ['type' => 'unique', 'columns' => ['licencie_id'], 'length' => []],
            'evalue_uk' => ['type' => 'unique', 'columns' => ['passage_id', 'licencie_id'], 'length' => []],
            'grade_actuel_evalue_fk' => ['type' => 'foreign', 'columns' => ['grade_actuel_id'], 'references' => ['grades', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'grade_presente_evalue_fk' => ['type' => 'foreign', 'columns' => ['grade_presente_id'], 'references' => ['grades', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'licencie_evalue_fk' => ['type' => 'foreign', 'columns' => ['licencie_id'], 'references' => ['licencies', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'passage_evalue_fk' => ['type' => 'foreign', 'columns' => ['passage_id'], 'references' => ['passages', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'passage_id' => 1,
            'licencie_id' => 1,
            'grade_actuel_id' => 1,
            'grade_presente_id' => 1,
            'numero' => 1,
            'resultat_passage' => 1,
            'created' => '2016-12-21 14:27:20',
            'modified' => '2016-12-21 14:27:20'
        ],
    ];
}
