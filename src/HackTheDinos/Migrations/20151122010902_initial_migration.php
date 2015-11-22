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
		( ID             BIGINT        NOT NULL
		, SubmissionDate DATETIME      NOT NULL
		, PaleoDecision  TINYINT       NOT NULL
		, Latitude       DOUBLE        NOT NULL
		, Longitude      DOUBLE        NOT NULL
		, Title          VARCHAR(255)  NOT NULL
		, Description    VARCHAR(4096) NOT NULL
		, PRIMARY KEY (ID)
		-- , FOREIGN KEY (PaleoDecision) REFERENCES Decision(ID)
		); "
	);

	$decision = $this->execute
	("CREATE TABLE decision 
		( ID       TINYINT       NOT NULL
		, Decision CHAR          NOT NULL
		, Rational VARCHAR(4096) NOT NULL
		, PRIMARY KEY (ID)
		);"
	);

	$vote = $this->execute
	("CREATE TABLE vote
		(ID        BIGINT NOT NULL
		, FossilID  BIGINT NOT NULL
		, Vote      Bool   NOT NULL
		, VisitorID BIGINT NOT NULL
		, PRIMARY KEY (ID)
		-- , FOREIGN KEY (FossilID)  REFERENCES Fossil(ID)
		-- , FOREIGN KEY (VisitorID) REFERENCES Visitor(ID)
		);"
	);

	$visitor = $this->execute
	("CREATE TABLE visitor
		( ID    BIGINT        NOT NULL
		, Name  VARCHAR(1024) NOT NULL
		, Email VARCHAR(1024) NOT NULL
		-- , TwitterThing
		, PRIMARY KEY (ID)
		-- Add OAuth Stuff too
		);"
	);

	$picture = $this->execute
	("CREATE TABLE picture
		( ID           BIGINT NOT NULL
		, PrimaryPhoto BOOL   NOT NULL
		, FossilID     BIGINT NOT NULL
		, ImageData    BLOB(65535)
		);"	
	);

    }
}
