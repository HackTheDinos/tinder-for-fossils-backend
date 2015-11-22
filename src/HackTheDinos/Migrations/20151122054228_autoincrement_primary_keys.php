<?php

use Phinx\Migration\AbstractMigration;

class AutoincrementPrimaryKeys extends AbstractMigration
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
	("CREATE TABLE fossil 
		( id             BIGINT        NOT NULL AUTO_INCREMENT
		, submission_date DATETIME      NOT NULL
		, paleo_decision  TINYINT       NOT NULL
		, latitude       DOUBLE        NOT NULL
		, longitude      DOUBLE        NOT NULL
		, title          VARCHAR(255)  NOT NULL
		, description    VARCHAR(4096) NOT NULL
		, visitor_id	BIGINT NOT NULL
		, rational	VARCHAR(4096)
		, PRIMARY KEY (ID)
		-- , FOREIGN KEY (paleo_decision) REFERENCES decision(id)
		-- , FOREIGN KEY (vistor_id) REFERENCES visitor(id)
		); "
	);

	$decision = $this->execute
	("CREATE TABLE decision 
		( id       TINYINT       NOT NULL
		, decision CHAR          NOT NULL
		, PRIMARY KEY (id)
		);"
	);

	$vote = $this->execute
	("CREATE TABLE vote
		(ID        BIGINT NOT NULL AUTO_INCREMENT
		, fossil_id  BIGINT NOT NULL
		, vote      Bool   NOT NULL
		, visitor_id BIGINT NOT NULL
		, PRIMARY KEY (id)
		-- , FOREIGN KEY (fossil_id)  REFERENCES fossil(id)
		-- , FOREIGN KEY (visitor_id) REFERENCES visitor(id)
		);"
	);

	$visitor = $this->execute
	("CREATE TABLE visitor
		( id    BIGINT        NOT NULL AUTO_INCREMENT
		, name  VARCHAR(1024) NOT NULL
		, email VARCHAR(1024) 
		-- , TwitterThing
		, PRIMARY KEY (id)
		-- Add OAuth Stuff too
		);"
	);

	$auto_int_100 = $this->execute
	("ALTER TABLE visitor AUTO_INCREMENT=100"
	);

	$picture = $this->execute
	("CREATE TABLE picture
		( id           BIGINT NOT NULL AUTO_INCREMENT
		, primary_picture BOOL   NOT NULL
		, fossil_id     BIGINT NOT NULL
		, picture_data    BLOB(65535)	
		-- add foreign key to fossil(id)
		);"	
	);
	$auto_int_1000 = $this->execute
	("ALTER TABLE picture AUTO_INCREMENT=1000");

	$archived_emails = $this->execute
	("CREATE TABLE archived_emails
		( id	BIGINT NOT NULL AUTO_INCREMENT
		, fossil_id BIGINT NOT NULL
		, inquiry_email VARCHAR(4096)
		, amnh_response_email VARCHAR(4096)
		-- add foreign key to fossil(id)
		);"
	);
    }
}
