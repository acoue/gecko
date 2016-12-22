<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotesFixture
 *
 */
class NotesFixture extends TestFixture
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
        'numero' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'juge_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'resultat_technique' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'resultat_kata' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'resultat_passage' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '0:non reçu ,1:reçu', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'passage_note_fk_idx' => ['type' => 'index', 'columns' => ['passage_id'], 'length' => []],
            'licencie_note_fk_idx' => ['type' => 'index', 'columns' => ['licencie_id'], 'length' => []],
            'juge_note_fk_idx' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'juge_note_fk' => ['type' => 'index', 'columns' => ['juge_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'note_uk' => ['type' => 'unique', 'columns' => ['passage_id', 'licencie_id', 'juge_id'], 'length' => []],
            'juge_note_fk' => ['type' => 'foreign', 'columns' => ['juge_id'], 'references' => ['juges', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'licencie_note_fk' => ['type' => 'foreign', 'columns' => ['licencie_id'], 'references' => ['licencies', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'passage_note_fk' => ['type' => 'foreign', 'columns' => ['passage_id'], 'references' => ['passages', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'numero' => 1,
            'juge_id' => 1,
            'resultat_technique' => 1,
            'resultat_kata' => 1,
            'resultat_passage' => 1,
            'created' => '2016-12-21 22:34:22',
            'modified' => '2016-12-21 22:34:22'
        ],
    ];
}
