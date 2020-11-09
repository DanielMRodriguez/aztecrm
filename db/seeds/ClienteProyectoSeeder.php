<?php


use Phinx\Seed\AbstractSeed;

class ClienteProyectoSeeder extends AbstractSeed
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
        $cliente = array(
            'nombre'        => 'Cliente de Prueba',
            'clave'         => 'CDP2011',
            'status'        => 1,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
        );
        $proyecto = array(
            'nombre'            => 'Depas lp',
            'clave'             => 'CDPDLP2011',
            'status'            => 1,
            'descripcion'       => "LANDing PAGE DE CONVERSION DEPAS LP",
            'cliente_id'        => 1,
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),
        );
        $notificaciones = array();

        $this->table('clientes')->insert($cliente)->saveData();
        $this->table('proyectos')->insert($proyecto)->saveData();
    }
}