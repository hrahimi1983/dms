<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'name' => 'Hamed Rahimi',
                'email' => 'hamedrahimi@me.com',
                'group_id' => '1',
                'password' => '$2y$10$Nf3rzIxF/7LBVo2/9uUob.zNFWZMUhxM9rEAz753n1lgx5WXnhGQm',
                'created' => '2019-11-02 20:47:32',
                'modified' => '2019-11-02 20:47:32',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
