<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JugesFixture
 *
 */
class JugesFixture extends TestFixture
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
        'jury_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'passage_juge_fk_idx' => ['type' => 'index', 'columns' => ['passage_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'jury_uk' => ['type' => 'unique', 'columns' => ['jury_id', 'passage_id'], 'length' => []],
            'jury_juge_fk_idx' => ['type' => 'unique', 'columns' => ['jury_id'], 'length' => []],
            'jury_juge_fk' => ['type' => 'foreign', 'columns' => ['jury_id'], 'references' => ['jurys', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'passage_juge_fk' => ['type' => 'foreign', 'columns' => ['passage_id'], 'references' => ['passages', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'jury_id' => 1,
            'created' => '2016-12-20 14:50:38',
            'modified' => '2016-12-20 14:50:38'
        ],
    ];
}
