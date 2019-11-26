<?php
use Migrations\AbstractMigration;

class RemoveCreatedFromDocumentsUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('documents_users');
        $table->removeColumn('created');
        $table->update();
    }
}
