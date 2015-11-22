CREATE VIEW FossilStats AS
SELECT fos.ID
     , fos.SubmissionDate
     , fos.Latitude
     , fos.Longitude
     , fos.Title
     , fos.Description
     , des.Decision
     , SUM(    vot.Vote) AS 'Yay'
     , SUM(NOT vot.Vote) AS 'Nay' 
FROM  Visitor AS vis
JOIN  Vote    AS vot
ON    vot.VisitorID = vis.ID
JOIN  Fossil  AS fos
ON    fos.ID = vot.FossilID
JOIN  Decision AS des
ON    des.ID = fos.PaleoDecision
GROUP BY fos.ID
;

