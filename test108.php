/*

****create table 

CREATE TABLE personal(
    id INT,
    name VARCHAR(50),
    birth_date DATE,
    phone VARCHAR(12),
    gender VARCHAR(1)
);
 

****insert into table 

INSERT INTO 
    personal(id, name, birth_date, phone, gender)
    VALUES(1, "Harshal", "1998-04-06", "8805643291","M");

INSERT INTO 
    personal(id, name, birth_date, phone, gender)
    VALUES
        (2, "Jayesh", "2001-05-23", "8805645869","M"),
        (3, "Mahesh", "2045-05-23", "8805645869","M");


**** Constraints

CREATE TABLE personal(
    id INT NOT NULL UNIQUE,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL CHECK(age>=18),
    phone VARCHAR(12) NOT NULL UNIQUE,
    gender VARCHAR(1) NOT NULL,
    city VARCHAR(10) NOT NULL DEFAULT 'Agra'
);


**** select 

SELECT * FROM personal;

SELECT id, name, phone FROM personal;

SELECT id AS Id, name AS "Student Name", phone AS Phone FROM personal;

SELECT id, name, phone 
FROM personal
WHERE gender="M";

SELECT id, name, phone 
FROM personal
WHERE city != "Agra";

SELECT id, name, phone 
FROM personal
WHERE city <> "Bhandara";

SELECT * 
FROM personal
WHERE age >=18 AND city="Agra";

SELECT * 
FROM personal
WHERE gender="M" OR city="Agra";
 
SELECT * 
FROM personal
WHERE NOT age >=18";

SELECT * 
FROM personal
WHERE age IN(18,20);

SELECT * 
FROM personal
WHERE age BETWEEN 18 AND 20;

SELECT * 
FROM personal
WHERE birth_date NOT BETWEEN '1991-06-21' AND '2010-05-20';

//match first charecter
SELECT * 
FROM personal
WHERE name BETWEEN "a" AND "k";

----------------------------------------

LIKE 'a%' ==> start with "a"
LIKE '%a' ==> End with "a"
LIKE '%am%' ==> have "am" in any position
LIKE 'a%m' ==> start with "a" and ends with "m"
LIKE '_a%' ==> "a" in the second position
LIKE '__a%' ==> "a" in the third position
LIKE '_oy' ==> "o" in the second "y" in the third position
----------------------------------------

SELECT * 
FROM personal
WHERE name LIKE "s%";

SELECT * 
FROM personal
WHERE name NOT LIKE "r%";

//case sensitive BINARY
SELECT * 
FROM personal
WHERE BINARY name LIKE "h%";

SELECT * 
FROM personal
WHERE name NOT LIKE "r%";

**** Regular Expression
//anywhere match
SELECT * 
FROM personal
WHERE name REGEXP 'man';

//start match
SELECT * 
FROM personal
WHERE name REGEXP '^ra';

//end match
SELECT * 
FROM personal
WHERE name REGEXP 'an$';

//multiple match
SELECT * 
FROM personal
WHERE name REGEXP 'ram|kapoor|khan'; 

SELECT * 
FROM personal
WHERE name REGEXP '^ram|kapoor|khan$'; 

//independent search i then s
SELECT * 
FROM personal
WHERE name REGEXP '[is]'; 

//independent search 'ra' then 'aa'
SELECT * 
FROM personal
WHERE name REGEXP '[ra]a'; 

//independent search start 'r' then 's'
SELECT * 
FROM personal
WHERE name REGEXP '^[rs]'; 


**** Order By

// ASC by default
SELECT * 
FROM personal
ORDER BY name DESC; 

SELECT * 
FROM personal
WHERE city="Agra"
ORDER BY name 

SELECT * 
FROM personal
ORDER BY age; 

SELECT * 
FROM personal
ORDER BY name,city; 

//DISTINCT -- unique values

SELECT DISTINCT city
FROM personal; 

SELECT DISTINCT age
FROM personal
ORDER BY age ;

**** select with value is null

SELECT * 
FROM personal
WHERE city IS NULL;

SELECT * 
FROM personal
WHERE name IS NOT NULL;


****LIMIT

SELECT * 
FROM personal
WHERE city="Agra"
LIMIT 10;

SELECT * 
FROM personal
WHERE city="Agra"
ORDER BY city
LIMIT 10;

SELECT * 
FROM personal
LIMIT 3, 3;

**** aggregate functions
//count
SELECT COUNT(name) 
FROM personal;

SELECT COUNT(*) 
FROM personal;

SELECT COUNT(DISTINCT city)
FROM personal;

SELECT COUNT(DISTINCT city) As Count
FROM personal;

//max min
SELECT MAX(percentage)
FROM personal;

SELECT MIN(percentage), name
FROM personal;

//sum
SELECT SUM(percentage) AS Total
FROM personal; 

//avg
SELECT AVG(percentage) AS Average
FROM personal;

****update

 UPDATE personal
 SET phone ="456789"
 WHERE id=1;

 UPDATE personal
 SET percentage=55, age=21
 WHERE id=4;

 UPDATE personal
 SET age=17
 WHERE id=1 IN (2,3);


 **** COMMIT & ROLLBACK

SELECT * FROM personal;

// commit -> save transaction
// rollback -> revert till next commit

UPDATE personal SET age=20
WHERE id=4;

COMMIT;

UPDATE personal SET percentage=60
WHERE id=2;

ROLLBACK;  

**** delete

DELETE FROM personal
WHERE id=4;

DELETE FROM personal
WHERE gender="F";


**** primary key
CREATE TABLE student(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    percentage INT NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(1) NOT NULL,
    city VARCHAR(10) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(city) REFERENCES City(cid)
);

CREATE TABLE city(
    cid INT NOT NULL AUTO_INCREMENT,
    cityname VARCHAR(50) NOT NULL,
    PRIMARY KEY(cid)
);

INSERT INTO city(cityname)
VALUES('Bhandara'),
('Nagpur'),
('Yavatmal');

//FOR EXISTING TABLE
ALTER TABLE student
ADD FOREIGN KEY (city) REFERENCES City(cid);

//INNER JOIN or JOIN
SELECT * FROM student INNER JOIN city
ON student.city=city.cid;

SELECT * FROM student s JOIN city c
ON s.city=c.cid;

SELECT s.id,s.name,s.percentage,s.age,s.gender,c.cityname
FROM student s INNER JOIN city c
ON s.city=c.cid
WHERE c.cityname="Agra"
ORDER BY s.name;

****LEFT JOIN and RIGHT JOIN
//LEFT JOIN -> all from left table and matching from right table
SELECT * FROM student s LEFT JOIN city c
ON s.city=c.cid;

//RIGHT JOIN -> all records from right table and matched record from left table
SELECT * FROM student s RIGHT JOIN city c
ON s.city=c.cid;


**** CROSS JOIN
SELECT * 
FROM student s CROSS JOIN city c;

SELECT * 
FROM student s,city c;

****multiple table
SELECT * FROM 
student s INNER JOIN city c
ON s.city=c.cid
INNER JOIN courses crc
ON s.courses=cr.courses_id;


**** GROUP BY
SELECT c.cityname, COUNT(s.city) AS Total
FROM student s INNER JOIN city c
ON s.city=c.cid
WHERE s.age >=20
GROUP BY city;

SELECT c.cityname, COUNT(s.city) AS Total
FROM student s INNER JOIN city c
ON s.city=c.cid
WHERE s.age >=20
GROUP BY city
ORDER BY COUNT(s.city) DESC;

SELECT c.cityname, COUNT(s.city) AS Total
FROM student s INNER JOIN city c
ON s.city=c.cid
WHERE s.age >=20
GROUP BY city
HAVING COUNT(s.city) > 3
ORDER BY COUNT(s.city) DESC;


**** Subquerys

SELECT name FROM student
WHERE courses=(SELECT course_id FROM courses WHERE course_name="MBA");

SELECT name FROM student
WHERE courses=(SELECT course_id FROM courses WHERE course_name IN ("Btech","MBA"));

SELECT name FROM student
WHERE courses IN (SELECT course_id FROM courses WHERE course_name IN ("Btech","MBA"));

SELECT name FROM student
WHERE EXISTS (SELECT course_id FROM courses WHERE course_name IN ("Btech","MBA"));

**** UNION AND UNION ALL

SELECT * FROM student
UNION
SELECT * FROM lecturers

SELECT name,age FROM student WHERE gender="M"
UNION ALL
SELECT name,age FROM lecturers WHERE gender="F"

SELECT name,age FROM student WHERE city=(SELECT cid FROM city WHERE cityname="Delhi")
UNION ALL
SELECT name,age FROM lecturers WHERE gender="F"

SELECT s.name,s.age,c.cityname
FROM students s INNER JOIN city c
ON s.city = c.cid
WHERE c.cityname="Delhi"
UNION ALL
SELECT l.name,l.age,ci.cityname
FROM lecturers l INNER JOIN city ci 
ON l.city = ci.cid
WHERE ci.cityname="Delhi";


**** IF & CASE

SELECT id, name, percentage
IF(percentage >= 33,"Pass","Fail") AS Result
From students;

SELECT id, name, percentage
CASE
    WHEN percentage >= 80 AND percentage <= 100 THEN "Merit"
    WHEN percentage >= 60 AND percentage <= 80 THEN "1st Division"
    WHEN percentage >= 45 AND percentage <= 60 THEN "2nd Division"
    WHEN percentage >= 33 AND percentage <= 45 THEN "3rd Division"
    WHEN percentage < 33 THEN "Fail"
    ELSE "Not Correct %"
END AS Grade
From students;

UPDATE students SET
percentage=(
    CASE id
        WHEN 3 THEN 39
        WHEN 7 THEN 62
    END
)
WHERE  id IN(3,7);


****Arithmetic Functions

PI()    ROUND()     CEIL()      FLOOR()
POW(BASE,EXPONENTIAL)       SQRT()      RAND() 
ABS()   SIGN()      

SIN()   COS()   TAN()   ASIN()  ACOS()
ATAN()  ATAN2() COT()   RADIANS()
-----------------------------------
SELECT 5 + 6 AS Total;
SELECT 5 - 6 AS Total;
SELECT 5 / 6 AS Total;
SELECT 5 % 6 AS Total;
SELECT 5 DIV 6 AS Total;
SELECT PI();
SELECT ROUND(523.256);
SELECT ROUND(SQRT(5));
SELECT id,name,(percentage + 5) FROM students;

**** String Functions in mysql

UPPER()/UCASE()     LOCATE()    REVERSE()   LOWER()/LCASE()
INSTR()     REPEAT()    LENGTH()    SUBSTRING()/SUBSTR()
REPLACE()   CHAR_LENGTH()   MID()   STRCMP()    CONCAT()
SUBSTRING_INDEX()   FIELD()     CONCAT_WS()     LEFT()
FIND_IN_SET()   LTRIM()     RTRIM()     POSITION()      RIGHT()
LPAD()      RPAD()      SPACE()     FORMAT()    HEX(str)

SELECT id, UPPER(name) AS Name FROM students;
SELECT id, LCASE(name) AS Name FROM students;
SELECT id, CHARECTER_LENGTH(name) AS " Char Length" FROM students;
SELECT id, CONCAT(name,"-",percentage) AS Name FROM students;

SELECT REVERSE(name) AS Name FROM students;

**** Date Function

curdate()   current_date()  sysdate()   now()   last_day()
day()   dayname()   dayofmonth()    dayofweek()     dayofyear()
week()  weekday()   year()  extract()   date_add()  adddate()
makedate()  date_sub()  subdate()   datediff() to_days()
from_days()     period_add()    period_diff()   date_format()
str_to_date()   quarter()

**** Time Function

curtime()   current_timestamp()     localtime()     localtimestamp()
timestamp()     time()     timediff()   hour()    minute()
second()    microsecond()   addtime()   subtime() maketime()
time_format()   sec_to_time()   time_to_sec()


****ALTER

ALTER TABLE students
ADD email VARCHAR(255);

ALTER TABLE students
MODIFY email VARCHAR(255)
AFTER name;  

ALTER TABLE students 
MODIFY email INT(10);

ALTER TABLE students
ADD UNIQUE(email); 

ALTER TABLE students
CHANGE email email_id VARCHAR(255);

ALTER TABLE students
DROP COLUMN email_id;

ALTER TABLE students
RENAME students2;

ALTER TABLE courses
AUTO_INCREMENT=4;


****DROP TRUNCATE

TRUNCATE TABLE courses;

DROP TABLE courses;


**** VIEW

CREATE VIEW studentdata
AS
SELECT id,name,course_name FROM
students s INNER JOIN courses c
ON s.courses = c.course_id;

SELECT * FROM studentdata;

ALTER VIEW studentdata
AS
SELECT id,name,course_name,cityname FROM
students s INNER JOIN courses c
ON s.courses = c.course_id
INNER JOIN city ci
ON s.city = ci.city;

or

CREATE OR REPLACE VIEW studentdata
AS
SELECT id,name,course_name,cityname FROM
students s INNER JOIN courses c
ON s.courses = c.course_id
INNER JOIN city ci
ON s.city = ci.city;

RENAME TABLE studentdata
TO studentcourse;

DROP VIEW studentcourse;


****INDEX

SELECT * FROM students
WHERE dob > "1998-04-06";

CREATE INDEX studdob ON students(dob);

SELECT * FROM students
WHERE dob > "1998-04-06";

SHOW INDEX FROM students;

DROP INDEX studdob ON students;



*/