-- 1. 사원 정보테이블에 각자의 정보를 적절하게 넣어주세요.
-- 2. 월급, 직책, 소속부서 테이블에 각자의 정보를 적절하게 넣어주세요
-- 3. 짝궁의 [1,2]것도 넣어주세요.
-- 4. 나와 짝궁의 소속 부서를 d009로 변경해 주세요.

-- 2. 뤌급 
INSERT INTO salaries(
	emp_no 
	,salary
	,from_date
	,to_date
				)
VALUES (
	500000
	,88958
	,DATE(20230314)
	,NOW()
);

SELECT *
FROM salaries
WHERE emp_no = 500000
;

-- 2. 직책 
INSERT INTO titles(
	emp_no 
	,title
	,from_date
	,to_date
	)
VALUES (
	500000 
	,'Technique Leader'
	,DATE(20230105)
	,NOW()
);
	
SELECT *
FROM titles
WHERE emp_no = 500000
;	
	
-- 2. 부서 
INSERT INTO dept_emp(
	emp_no 
	,dept_no
	,from_date
	,to_date
	)
VALUES (
	500000 
	,'d001'
	,DATE(20230101)
	,NOW()
);

SELECT *
FROM dept_emp
WHERE emp_no = 500000
;	

-- 3. 짝궁1
INSERT INTO employees(
	emp_no
	, birth_date
	, first_name
	, last_name
	, gender
	, hire_date
)
VALUES
(
	500001
	, DATE(19880101)
	, 'jinyeong'
	, 'park'
	, 'M'
	, NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500001
;	

--3. 짝궁2
INSERT INTO employees(
	emp_no
	, birth_date
	, first_name
	, last_name
	, gender
	, hire_date
)
VALUES
(
	500002
	, DATE(19900101)
	, 'seongjun'
	, 'park'
	, 'M'
	, NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500002
;	


-- 4. 소속부서 변경
UPDATE dept_emp
SET dept_no = 'd009', to_date = DATE(99990101)
WHERE emp_no = 500000
;

INSERT INTO dept_emp(
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES
(
	500000
	,'d001'
	,DATE(20230101)
	,NOW()
);

SELECT *
FROM dept_emp
WHERE emp_no = 500000
;	

-- 3. 짝궁1 부서

INSERT INTO salaries(
	emp_no 
	,salary
	,from_date
	,to_date
				)
VALUES (
	500001
	,88950
	,DATE(20230314)
	,NOW()
);

SELECT *
FROM salaries
WHERE emp_no = 500001
;

-- 3. 직책
INSERT INTO titles(
	emp_no 
	,title
	,from_date
	,to_date
	)
VALUES (
	500001
	,'Technique'
	,DATE(20230101)
	,NOW()
);
	
SELECT *
FROM titles
WHERE emp_no = 500001
;	
	
-- 3. 부서
INSERT INTO dept_emp(
	emp_no 
	,dept_no
	,from_date
	,to_date
	)
VALUES (
	500001
	,'d001'
	,DATE(20230101)
	,NOW()
);

SELECT *
FROM dept_emp
WHERE emp_no = 500001
;


--4. 짝궁 부서 변경
UPDATE dept_emp
SET dept_no = 'd009', to_date = DATE(99990101), from_date = NOW()
WHERE emp_no = 500001
;


INSERT INTO dept_emp(
	emp_no 
	,dept_no
	,from_date
	,to_date
	)
VALUES (
	500001
	,'d001'
	,DATE(20230101)
	,NOW()
);


SELECT *
FROM dept_emp
WHERE emp_no = 500001
;	



--5. 짝궁1의 모든 정보 삭제

DELETE FROM employees
WHERE emp_no = 500001
;


SELECT *
FROM dept_emp
WHERE emp_no = 500001
;	


-- 6.'d009'부서 관리자를 나로 변경


INSERT INTO dept_manager(
	dept_no
	,emp_no 
	,from_date
	,to_date
				)
VALUES (
	'd009'
	,500000 
	,DATE(20230101)
	,NOW()
);



-- 7. 오늘부로 나의 직책 'senior engineer'

UPDATE titles
SET title = 'Senior Engineer', to_date = DATE(99990101), from_date = NOW()
WHERE emp_no = 500000
;

INSERT INTO titles(
	emp_no 
	,title
	,from_date
	,to_date
	)
VALUES (
	500000 
	,'Technique Leader'
	,DATE(20230105)
	,NOW()
);


SELECT *
FROM titles
WHERE emp_no = 500000
;

-- 8. 최고연봉사원과 최저 연봉 사원의 사번과 이름

SELECT emp_no, first_name, last_name 
FROM employees
WHERE emp_no = (
						SELECT emp_no
						FROM salaries
						WHERE salary = ( 
													SELECT MAX(salary)
													FROM salaries
													));

SELECT emp_no, first_name, last_name 
FROM employees
WHERE emp_no = (
						SELECT emp_no
						FROM salaries
						WHERE salary = ( 
													SELECT MIN(salary)
													FROM salaries
													));
													
													
-- 첫번째방법													
SELECT employees.emp_no
				, first_name
				, last_name 
FROM employees
JOIN salaries ON employees.emp_no = salaries.emp_no
WHERE salary =	(SELECT MAX(salary) FROM salaries)											
				OR
	salary = (SELECT MIN(salary) FROM salaries);		

-- 두번째방법
	
SELECT emp_no, FIRST_name, last_name
FROM employees
WHERE emp_no IN (
					SELECT emp_no
					FROM salaries
					WHERE salary  =	(SELECT MAX(salary) FROM salaries)											
					OR salary = (SELECT MIN(salary) FROM salaries));	

-- 세번째방법 // 대신 중복있을떼는 중복값은 찾지못함
SELECT emp_no, FIRST_name, last_name
FROM employees
WHERE emp_no = ( SELECT emp_no
					FROM salaries
					ORDER BY salary
					LIMIT 1)
	or
	emp_no = 
	( SELECT emp_no 
	FROM salaries 
	ORDER BY salary 
	DESC LIMIT 1 )
	;						
	
	
	
	
	
							
				
-- 9. 전체 사원의 평균 연봉을 출력

SELECT AVG(salary)
FROM salaries
;

-- 10. 사번이 499,975인 사원의 지금까지 평균 연봉을 출력


SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975
;



