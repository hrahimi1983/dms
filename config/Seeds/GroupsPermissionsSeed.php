<?php
use Migrations\AbstractSeed;

/**
 * GroupsPermissions seed.
 */
class GroupsPermissionsSeed extends AbstractSeed
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
                'group_id' => '2',
                'permission_id' => '1',
            ],
            [
                'id' => '2',
                'group_id' => '2',
                'permission_id' => '2',
            ],
            [
                'id' => '3',
                'group_id' => '3',
                'permission_id' => '2',
            ],
            [
                'id' => '4',
                'group_id' => '3',
                'permission_id' => '1',
            ],
            [
                'id' => '5',
                'group_id' => '4',
                'permission_id' => '1',
            ],
            [
                'id' => '6',
                'group_id' => '2',
                'permission_id' => '4',
            ],
            [
                'id' => '7',
                'group_id' => '3',
                'permission_id' => '4',
            ],
            [
                'id' => '8',
                'group_id' => '2',
                'permission_id' => '5',
            ],
            [
                'id' => '9',
                'group_id' => '3',
                'permission_id' => '5',
            ],
            [
                'id' => '10',
                'group_id' => '2',
                'permission_id' => '6',
            ],
            [
                'id' => '11',
                'group_id' => '3',
                'permission_id' => '6',
            ],
            [
                'id' => '12',
                'group_id' => '2',
                'permission_id' => '7',
            ],
            [
                'id' => '13',
                'group_id' => '3',
                'permission_id' => '7',
            ],
            [
                'id' => '15',
                'group_id' => '2',
                'permission_id' => '8',
            ],
            [
                'id' => '16',
                'group_id' => '3',
                'permission_id' => '8',
            ],
            [
                'id' => '17',
                'group_id' => '2',
                'permission_id' => '9',
            ],
            [
                'id' => '18',
                'group_id' => '2',
                'permission_id' => '10',
            ],
            [
                'id' => '19',
                'group_id' => '3',
                'permission_id' => '10',
            ],
            [
                'id' => '20',
                'group_id' => '2',
                'permission_id' => '11',
            ],
            [
                'id' => '21',
                'group_id' => '3',
                'permission_id' => '11',
            ],
            [
                'id' => '22',
                'group_id' => '2',
                'permission_id' => '12',
            ],
            [
                'id' => '23',
                'group_id' => '3',
                'permission_id' => '12',
            ],
            [
                'id' => '24',
                'group_id' => '2',
                'permission_id' => '13',
            ],
            [
                'id' => '25',
                'group_id' => '2',
                'permission_id' => '14',
            ],
            [
                'id' => '26',
                'group_id' => '3',
                'permission_id' => '14',
            ],
            [
                'id' => '27',
                'group_id' => '2',
                'permission_id' => '15',
            ],
            [
                'id' => '28',
                'group_id' => '3',
                'permission_id' => '15',
            ],
            [
                'id' => '29',
                'group_id' => '2',
                'permission_id' => '16',
            ],
            [
                'id' => '30',
                'group_id' => '3',
                'permission_id' => '16',
            ],
            [
                'id' => '31',
                'group_id' => '2',
                'permission_id' => '17',
            ],
            [
                'id' => '32',
                'group_id' => '2',
                'permission_id' => '18',
            ],
            [
                'id' => '33',
                'group_id' => '3',
                'permission_id' => '18',
            ],
            [
                'id' => '34',
                'group_id' => '2',
                'permission_id' => '19',
            ],
            [
                'id' => '35',
                'group_id' => '3',
                'permission_id' => '19',
            ],
            [
                'id' => '36',
                'group_id' => '2',
                'permission_id' => '20',
            ],
            [
                'id' => '37',
                'group_id' => '3',
                'permission_id' => '20',
            ],
            [
                'id' => '38',
                'group_id' => '2',
                'permission_id' => '21',
            ],
            [
                'id' => '39',
                'group_id' => '3',
                'permission_id' => '21',
            ],
            [
                'id' => '40',
                'group_id' => '4',
                'permission_id' => '21',
            ],
            [
                'id' => '41',
                'group_id' => '2',
                'permission_id' => '22',
            ],
            [
                'id' => '42',
                'group_id' => '3',
                'permission_id' => '22',
            ],
            [
                'id' => '43',
                'group_id' => '4',
                'permission_id' => '22',
            ],
            [
                'id' => '44',
                'group_id' => '2',
                'permission_id' => '23',
            ],
            [
                'id' => '45',
                'group_id' => '3',
                'permission_id' => '23',
            ],
            [
                'id' => '46',
                'group_id' => '2',
                'permission_id' => '24',
            ],
            [
                'id' => '47',
                'group_id' => '3',
                'permission_id' => '24',
            ],
            [
                'id' => '48',
                'group_id' => '2',
                'permission_id' => '25',
            ],
            [
                'id' => '49',
                'group_id' => '3',
                'permission_id' => '25',
            ],
            [
                'id' => '50',
                'group_id' => '2',
                'permission_id' => '26',
            ],
            [
                'id' => '51',
                'group_id' => '2',
                'permission_id' => '27',
            ],
            [
                'id' => '52',
                'group_id' => '3',
                'permission_id' => '27',
            ],
        ];

        $table = $this->table('groups_permissions');
        $table->insert($data)->save();
    }
}
