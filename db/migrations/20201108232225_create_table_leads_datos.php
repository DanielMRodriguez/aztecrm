<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableLeadsDatos extends AbstractMigration
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
        $leads = $this->table('leads');
        $leads->addColumn('id_proyecto', 'integer')
            ->addColumn('status', 'integer')
            ->addColumn('comentarios', 'text')
            ->addColumn('created_at', 'timestamp')
            ->addColumn('updated_at', 'timestamp')
            ->addForeignKey('id_proyecto', 'proyectos', 'id', ['delete' => 'NO_ACTION', 'update' => 'NO_ACTION'])
            ->create();

        $datos = $this->table('datos');
        $datos->addColumn('id_lead', 'integer')
            ->addColumn('campo', 'string', ['limit' => 250])
            ->addColumn('valor', 'string', ['limit' => 250])
            ->addColumn('created_at', 'timestamp')
            ->addColumn('updated_at', 'timestamp')
            ->addForeignKey('id_lead', 'leads', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE'])
            ->create();
    }
}