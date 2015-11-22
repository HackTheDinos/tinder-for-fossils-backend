<?php

use Phinx\Migration\AbstractMigration;

class PicturesNullableFields extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
    $picture = $this->execute
    ("ALTER TABLE picture
        MODIFY COLUMN id INT AUTO INCREMENT
      , MODIFY COLUMN filepath VARCHAR(1024) NOT NULL
      , MODIFY COLUMN primary_picture BOOL
      , MODIFY COLUMN fossil_id BIGINT;"
    );
    }
}
