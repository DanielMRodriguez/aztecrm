<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = array(
            'nombre'      => 'Luis Mendoza',
            'correo'      => 'luis@gmail.com',
            'password'    => password_hash('123', PASSWORD_DEFAULT),
            'status'      => 1,
            'role'        => 1,
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        );
        $this->table('usuarios')->insert($data)->saveData();
    }
}