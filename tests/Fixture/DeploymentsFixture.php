<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use App\TestSuite\Fixture\TestFixture;

/**
 * DeploymentsFixture
 */
class DeploymentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'crelease_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'srelease_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'cconstraint' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'sconstraint' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'domain' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'islocked' => ['type' => 'boolean', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'sass' => ['type' => 'boolean', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'standalone' => ['type' => 'boolean', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'ipv4' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ipv6' => ['type' => 'string', 'length' => 39, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'fk_deployments_users_idx' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
            'fk_deployments_sreleases1_idx' => ['type' => 'index', 'columns' => ['srelease_id'], 'length' => []],
            'fk_deployments_creleases1_idx' => ['type' => 'index', 'columns' => ['crelease_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'domain_UNIQUE' => ['type' => 'unique', 'columns' => ['domain'], 'length' => []],
            'fk_deployments_users' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'fk_deployments_sreleases1' => ['type' => 'foreign', 'columns' => ['srelease_id'], 'references' => ['sreleases', 'id'], 'update' => 'noAction', 'delete' => 'setNull', 'length' => []],
            'fk_deployments_creleases1' => ['type' => 'foreign', 'columns' => ['crelease_id'], 'references' => ['creleases', 'id'], 'update' => 'noAction', 'delete' => 'setNull', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',

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
                'id' => '693b94d8-40e1-4051-a8c8-d72c19a2c510',
                'user_id' => '6e87bd0e-b953-430e-966d-a4c30b64f321',
                'crelease_id' => '33786240-23d1-4044-a5e5-8790da631aa2',
                'srelease_id' => '33786240-23d1-4044-a5e5-8790da631a93',
                'cconstraint' => '^1.0.0-stable',
                'sconstraint' => '^1.0.0-stable',
                'domain' => 'test.viademat.com',
                'islocked' => false,
                'sass' => true,
                'standalone' => false,
                'ipv4' => null,
                'ipv6' => null,
                'created' => '2020-12-22 09:27:22',
                'modified' => '2020-12-22 09:27:22',
            ],
        ];
        parent::init();
    }
}
