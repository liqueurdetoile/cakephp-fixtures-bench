<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SreleasesFixture
 */
class SreleasesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'version' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '33786240-23d1-4044-a5e5-8790da631a90',
                'version' => '1.0.0-alpha',
                'created' => '2020-12-22 09:27:22',
                'modified' => '2020-12-22 09:27:22',
            ],
            [
                'id' => '33786240-23d1-4044-a5e5-8790da631a91',
                'version' => '1.0.0-beta',
                'created' => '2020-12-22 09:27:22',
                'modified' => '2020-12-22 09:27:22',
            ],
            [
                'id' => '33786240-23d1-4044-a5e5-8790da631a92',
                'version' => '1.0.1-alpha',
                'created' => '2020-12-22 09:27:22',
                'modified' => '2020-12-22 09:27:22',
            ],
            [
                'id' => '33786240-23d1-4044-a5e5-8790da631a93',
                'version' => '1.0.0-stable',
                'created' => '2020-12-22 09:27:22',
                'modified' => '2020-12-22 09:27:22',
            ],
        ];

        parent::init();
    }
}
