CREATE TABLE students (
	stu_no	INT	
	,stu_birth	DATE	NOT NULL	
	,stu_name	VARCHAR(20)	NOT NULL
	,stu_addr	VARCHAR(50)	NOT NULL
	,stu_numb	INT	NOT NULL
	,stu_gender	ENUM('M','F')	NOT NULL
	,adm_date	DATE	NOT NULL
	,gradu_date	DATE	NOT NULL	
	,stu_status ENUM('Y','N')
	,CONSTRAINT PK_students_stu_no PRIMARY KEY(stu_no)
);


ALTER TABLE `test`.`students` MODIFY stu_numb CHAR(11);

CREATE TABLE score (
	stu_no	INT	
	,sub_num	INT
	,sub_score	INT	NOT NULL
	,sub_rank	INT	NOT NULL
	,comp_date	DATE	NOT NULL
	,CONSTRAINT PK_score_stu_no PRIMARY KEY(stu_no, sub_num)
);


CREATE TABLE professor (
   pro_no	INT		
	,pro_name	VARCHAR(20)	NOT NULL	
	,pro_birth	DATE	NOT NULL
	,deg_no	INT	NOT NULL	
	,pro_addr	VARCHAR(50)	NOT NULL	
	,pro_rank	INT	NOT NULL	
	,lab_no	INT	NOT NULL
	,pro_gender	ENUM('M','F')	NOT NULL
	,hire_date	DATE	NOT NULL
	,CONSTRAINT PK_professor_pro_no PRIMARY KEY(pro_no)
);


CREATE TABLE subjects (
   sub_num	INT	
	,pro_no	INT	NOT NULL	
	,sub_name	VARCHAR(20)	NOT NULL	
	,fx_num	INT	NOT NULL	
	,lec_term	INT	NOT NULL	
	,lec_room	CHAR(4)	NOT NULL	
	,lec_start	DATETIME	
	,lec_end	DATETIME	
	,book_num	INT	NOT NULL	
	,req_num	INT	NOT NULL	
	,CONSTRAINT PK_subjects_sub_num PRIMARY KEY(sub_num)
);

CREATE TABLE textbook (
    book_num	INT
	,book_name	VARCHAR(20)	
	,CONSTRAINT PK_textbook_book_num PRIMARY KEY(book_num)
);


CREATE DATABASE test2 DEFAULT CHARACTER SET UTF8;

SHOW DATABASES;


