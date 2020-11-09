<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableUsuarios extends AbstractMigration
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
        $usuarios = $this->table('usuarios');
        $usuarios->addColumn('nombre', 'string', ['limit' => 250])
            ->addColumn('correo', 'string', ['limit' => 250])
            ->addColumn('password', 'string', ['limit' => 250])
            ->addColumn('status', 'integer')
            ->addColumn('role', 'integer')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->create();
    }
}