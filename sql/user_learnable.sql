SELECT s.sid, s.name
FROM   skills s
WHERE  s.sid NOT IN (
    SELECT us.sid
    FROM   user_skill us
    WHERE  us.uid = {uid}
)
