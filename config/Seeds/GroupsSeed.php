<?php
use Migrations\AbstractSeed;

/**
 * Groups seed.
 */
class GroupsSeed extends AbstractSeed
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
                'name' => 'Programmer',
                'created' => '2019-11-01 00:00:00',
                'modified' => '2019-11-02 00:00:00',
            ],
            [
                'id' => '2',
                'name' => 'Admin',
                'created' => '2019-11-01 00:00:00',
                'modified' => '2019-11-02 00:00:00',
            ],
            [
                'id' => '3',
                'name' => 'Company Team',
                'created' => '2019-11-01 00:00:00',
                'modified' => '2019-11-02 00:00:00',
            ],
            [
                'id' => '4',
                'name' => 'Users',
                'created' => '2019-11-01 00:00:00',
                'modified' => '2019-11-02 00:00:00',
            ]
        ];

        $table = $this->table('groups');
        $table->insert($data)->save();
    }
}
