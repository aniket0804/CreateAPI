
CREATE TABLE USER (
	id INT(100) NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	occupation VARCHAR(100) NOT NULL,
	city VARCHAR(100) NOT NULL,
	sex VARCHAR(100) NOT NULL,
	age INT(100) NOT NULL,
	PRIMARY KEY (id) );

INSERT INTO USER(name,occupation,city,sex,age) values("Aniket","Worker","Mumbai","Male",28);
INSERT INTO USER(name,occupation,city,sex,age) values("Priyanka","Worker","Pune","Female",26);
