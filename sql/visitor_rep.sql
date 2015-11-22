CREATE VIEW visitor_stats AS
SELECT vis.id
     , SUM(des.decision = 'Y' AND vot.vote) AS 'rep'
FROM  visitor AS vis
JOIN  vote    AS vot
ON    vot.visitor_id = vis.id
JOIN  fossil  AS fos
ON    fos.id = vot.fossil_id
JOIN  decision AS des
ON    des.id = fos.paleo_decision
GROUP BY vis.id
;
