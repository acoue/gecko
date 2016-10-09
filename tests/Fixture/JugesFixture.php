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
        'jure_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'jure_juge_fk_idx' => ['type' => 'index', 'columns' => ['jure_id'], 'length' => []],
            'passage_juge_fk_idx' => ['type' => 'index', 'columns' => ['passage_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'passage_uk' => ['type' => 'unique', 'columns' => ['passage_id', 'jure_id'], 'length' => []],
            'jure_juge_fk' => ['type' => 'foreign', 'columns' => ['jure_id'], 'references' => ['jures', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'jure_id' => 1,
            'created' => '2016-10-09 16:17:35',
            'modified' => '2016-10-09 16:17:35'
        ],
    ];
}
