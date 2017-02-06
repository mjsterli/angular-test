DROP DATABASE IF EXISTS People;
CREATE DATABASE People;
USE People;

DROP TABLE IF EXISTS Person;
CREATE TABLE Person
(
  PersonID  INT AUTO_INCREMENT PRIMARY KEY,
  First     VARCHAR( 100 ),
  Middle    VARCHAR( 100 ),
  Last      VARCHAR( 100 ),
  Age       INT
);

INSERT Person
  ( First, Middle, Last, Age )
SELECT 'Michel', 'Jerome', 'Sterling', 36 UNION ALL
SELECT 'Renata', 'Denise', 'Sterling', 36 UNION ALL
SELECT 'Adriana', 'Michelle', 'Sterling', 11 UNION ALL
SELECT 'Isaac', 'Michel', 'Sterling', 6;
