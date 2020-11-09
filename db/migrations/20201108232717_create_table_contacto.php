<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableContacto extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {

        $contactos = $this->table('contactos');
        $contactos->addColumn('nombre', 'string', ['limit' => 250])
            ->addColumn('telefono', 'string', ['limit' => 20])
            ->addColumn('correo', 'string', ['limit' => 100])
            ->addColumn('proyecto_id', 'integer', ['null' => true])
            ->addColumn('created_at', 'timestamp')
            ->addColumn('updated_at', 'timestamp')
            ->addForeignKey('proyecto_id', 'proyectos', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->create();
    }
}