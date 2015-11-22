<?php

use Phinx\Migration\AbstractMigration;

class PrepareTablesForImport extends AbstractMigration
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

	$fossil = $this->execute
	("ALTER TABLE fossil
		ADD COLUMN rationale VARCHAR(4096);"
	);

	$decision = $this->execute
	("ALTER TABLE decision 
		DROP COLUMN rational;"
	);

	$visitor = $this->execute
	("ALTER TABLE visitor 
		ADD COLUMN twitter_handle VARCHAR(1024);"
	);

	$auto_int_100 = $this->execute
	("ALTER TABLE visitor 
		AUTO_INCREMENT=101;"
	);

	
	$auto_int_1000 = $this->execute
	("ALTER TABLE picture 
		AUTO_INCREMENT=1001;"
	);


    }
}
