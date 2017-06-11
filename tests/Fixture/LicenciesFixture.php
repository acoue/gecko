<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LicenciesFixture
 *
 */
class LicenciesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'prenom' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nom' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sexe' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ddn' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'licence' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'grade_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'display_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'club_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'discipline_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'club_id_2' => ['type' => 'index', 'columns' => ['club_id'], 'length' => []],
            'grade_licencie_fk_idx' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'discipline_licencie_fk_idx' => ['type' => 'index', 'columns' => ['discipline_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'licencie_uk' => ['type' => 'unique', 'columns' => ['club_id', 'prenom', 'nom', 'discipline_id'], 'length' => []],
            'club_licencie_fk' => ['type' => 'foreign', 'columns' => ['club_id'], 'references' => ['clubs', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'discipline_licencie_fk' => ['type' => 'foreign', 'columns' => ['discipline_id'], 'references' => ['disciplines', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'grade_licencie_fk' => ['type' => 'foreign', 'columns' => ['club_id'], 'references' => ['clubs', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'prenom' => 'Lorem ipsum dolor sit amet',
            'nom' => 'Lorem ipsum dolor sit amet',
            'sexe' => 'Lorem ipsum dolor sit ame',
            'ddn' => '2016-12-28',
            'licence' => 'Lorem ipsum dolor ',
            'grade_id' => 1,
            'display_name' => 'Lorem ipsum dolor sit amet',
            'club_id' => 1,
            'discipline_id' => 1,
            'created' => '2016-12-28 18:39:41',
            'modified' => '2016-12-28 18:39:41'
        ],
    ];
}
