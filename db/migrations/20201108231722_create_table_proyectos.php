<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableProyectos extends AbstractMigration
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
        $proyectos = $this->table('proyectos');
        $proyectos->addColumn('nombre', 'string', ['limit' => 250])
            ->addColumn('clave', 'string', ['limit' => 20])
            ->addColumn('status', 'integer')
            ->addColumn('descripcion', 'text')
            ->addColumn('cliente_id', 'integer')
            ->addColumn('created_at', 'timestamp')
            ->addColumn('updated_at', 'timestamp')
            ->addForeignKey('cliente_id', 'clientes', 'id', ['delete' => 'NO_ACTION', 'update' => 'NO_ACTION'])
            ->create();
    }
}