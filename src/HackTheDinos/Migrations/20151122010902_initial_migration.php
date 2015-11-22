<?php

use Phinx\Migration\AbstractMigration;

class InitialMigration extends AbstractMigration
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
		( id             BIGINT        NOT NULL
		, submission_date DATETIME      NOT NULL
		, paleo_decision  TINYINT       NOT NULL
		, latitude       DOUBLE        NOT NULL
		, longitude      DOUBLE        NOT NULL
		, title          VARCHAR(255)  NOT NULL
		, description    VARCHAR(4096) NOT NULL
		, PRIMARY KEY (id)
		, visitor_id	BIGINT NOT NULL
		-- , FOREIGN KEY (paleo_decision) REFERENCES Decision(id)
		); "
	);

	$decision = $this->execute
	("CREATE TABLE decision 
		( id       TINYINT       NOT NULL
		, decision CHAR          NOT NULL
		, rational VARCHAR(4096) NOT NULL
		, PRIMARY KEY (id)
		);"
	);

	$vote = $this->execute
	("CREATE TABLE vote
		(id        BIGINT NOT NULL
		, fossil_id  BIGINT NOT NULL
		, vote      Bool   NOT NULL
		, visitor_id BIGINT NOT NULL
		, PRIMARY KEY (id)
		-- , FOREIGN KEY (fossil_id)  REFERENCES Fossil(id)
		-- , FOREIGN KEY (visitor_id) REFERENCES Visitor(id)
		);"
	);

	$visitor = $this->execute
	("CREATE TABLE visitor
		( id    BIGINT        NOT NULL
		, name  VARCHAR(1024) NOT NULL
		, email VARCHAR(1024) NOT NULL
		-- , TwitterThing
		, PRIMARY KEY (id)
		-- Add OAuth Stuff too
		);"
	);

	$picture = $this->execute
	("CREATE TABLE picture
		( id           BIGINT NOT NULL
		, primary_picture BOOL   NOT NULL
		, fossil_id     BIGINT NOT NULL
		, picture_data    BLOB(65535)	
		-- add foreign key to fossil(id)
		);"	
	);

	$archived_emails = $this->execute
	("CREATE TABLE archived_emails
		( id	BIGINT NOT NULL
		, fossil_id BIGINT NOT NULL
		, inquiry_email VARCHAR(4096)
		, amnh_response_email VARCHAR(4096)
		-- add foreign key to fossil(id)
		);"
	);
    }
}
