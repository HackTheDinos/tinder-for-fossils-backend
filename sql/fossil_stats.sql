CREATE VIEW fossil_stats AS
SELECT fos.id
     , fos.submission_date
     , fos.latitude
     , fos.longitude
     , fos.title
     , fos.description
     , des.decision
     , SUM(    vot.vote) AS 'yay'
     , SUM(NOT vot.vote) AS 'nay' 
FROM  visitor AS vis
JOIN  vote    AS vot
ON    vot.visitor_id = vis.id
JOIN  fossil  AS fos
ON    fos.id = vot.fossil_id
JOIN  decision AS des
ON    des.id = fos.paleo_decision
GROUP BY fos.id
;

