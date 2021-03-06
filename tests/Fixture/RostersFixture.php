<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RostersFixture
 *
 */
class RostersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'class_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'teacher_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'description' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'class_id' => ['type' => 'index', 'columns' => ['class_id'], 'length' => []],
            'teacher_id' => ['type' => 'index', 'columns' => ['teacher_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'rosters_ibfk_1' => ['type' => 'foreign', 'columns' => ['class_id'], 'references' => ['clss', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'rosters_ibfk_2' => ['type' => 'foreign', 'columns' => ['teacher_id'], 'references' => ['teachers', 'id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
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
            'class_id' => 1,
            'teacher_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet',
            'created' => '2017-02-19 17:57:29',
            'modified' => '2017-02-19 17:57:29'
        ],
    ];
}
