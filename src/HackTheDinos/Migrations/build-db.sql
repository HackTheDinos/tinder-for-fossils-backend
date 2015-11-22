CREATE TABLE Fossil 
( ID             BIGINT        NOT NULL
, SubmissionDate DATETIME      NOT NULL
, PaleoDecision  TINYINT       NOT NULL
, Latitude       DOUBLE        NOT NULL
, Longitude      DOUBLE        NOT NULL
, Title          VARCHAR(255)  NOT NULL
, Description    VARCHAR(4096) NOT NULL
, PRIMARY KEY (ID)
-- , FOREIGN KEY (PaleoDecision) REFERENCES Decision(ID)
);

CREATE TABLE Decision 
( ID       TINYINT       NOT NULL
, Decision CHAR          NOT NULL
, Rational VARCHAR(4096) NOT NULL
, PRIMARY KEY (ID)
);

CREATE TABLE VOTE 
( ID        BIGINT NOT NULL
, FossilID  BIGINT NOT NULL
, Vote      Bool   NOT NULL
, VisitorID BIGINT NOT NULL
, PRIMARY KEY (ID)
-- , FOREIGN KEY (FossilID)  REFERENCES Fossil(ID)
-- , FOREIGN KEY (VisitorID) REFERENCES Visitor(ID)
);

CREATE TABLE Visitor
( ID    BIGINT        NOT NULL
, Name  VARCHAR(1024) NOT NULL
, Email VARCHAR(1024) NOT NULL
-- , TwitterThing
, PRIMARY KEY (ID)
-- Add OAuth Stuff too
);

CREATE TABLE Picture
( ID           BIGINT NOT NULL
, PrimaryPhoto BOOL   NOT NULL
, FossilID     BIGINT NOT NULL
, ImageData    BLOB(65535)
);
