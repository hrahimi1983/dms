<?php
use Migrations\AbstractSeed;

/**
 * Permissions seed.
 */
class PermissionsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'dashboard',
            ],
            [
                'id' => '2',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'index',
            ],
            [
                'id' => '3',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'edit',
            ],
            [
                'id' => '4',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'view',
            ],
            [
                'id' => '5',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'unlinkDocument',
            ],
            [
                'id' => '6',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'linkDocument',
            ],
            [
                'id' => '7',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'add',
            ],
            [
                'id' => '8',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'multiSearch',
            ],
            [
                'id' => '9',
                'plugin' => '',
                'controller' => 'users',
                'action' => 'delete',
            ],
            [
                'id' => '10',
                'plugin' => '',
                'controller' => 'tags',
                'action' => 'index',
            ],
            [
                'id' => '11',
                'plugin' => '',
                'controller' => 'tags',
                'action' => 'edit',
            ],
            [
                'id' => '12',
                'plugin' => '',
                'controller' => 'tags',
                'action' => 'view',
            ],
            [
                'id' => '13',
                'plugin' => '',
                'controller' => 'tags',
                'action' => 'delete',
            ],
            [
                'id' => '14',
                'plugin' => '',
                'controller' => 'tags',
                'action' => 'add',
            ],
            [
                'id' => '15',
                'plugin' => '',
                'controller' => 'types',
                'action' => 'edit',
            ],
            [
                'id' => '16',
                'plugin' => '',
                'controller' => 'types',
                'action' => 'view',
            ],
            [
                'id' => '17',
                'plugin' => '',
                'controller' => 'types',
                'action' => 'delete',
            ],
            [
                'id' => '18',
                'plugin' => '',
                'controller' => 'types',
                'action' => 'index',
            ],
            [
                'id' => '19',
                'plugin' => '',
                'controller' => 'types',
                'action' => 'add',
            ],
            [
                'id' => '20',
                'plugin' => '',
                'controller' => 'documents',
                'action' => 'index',
            ],
            [
                'id' => '21',
                'plugin' => '',
                'controller' => 'documents',
                'action' => 'view',
            ],
            [
                'id' => '22',
                'plugin' => '',
                'controller' => 'documents',
                'action' => 'add',
            ],
            [
                'id' => '23',
                'plugin' => '',
                'controller' => 'documents',
                'action' => 'edit',
            ],
            [
                'id' => '24',
                'plugin' => '',
                'controller' => 'documents',
                'action' => 'download',
            ],
            [
                'id' => '25',
                'plugin' => '',
                'controller' => 'documents',
                'action' => 'toBrowser',
            ],
            [
                'id' => '26',
                'plugin' => '',
                'controller' => 'documents',
                'action' => 'delete',
            ],
            [
                'id' => '27',
                'plugin' => '',
                'controller' => 'documents',
                'action' => 'multiSearch',
            ],
        ];

        $table = $this->table('permissions');
        $table->insert($data)->save();
    }
}
