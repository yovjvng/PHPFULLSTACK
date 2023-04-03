-- 새로고침
FLUSH PRIVILEGES;


-- 1. 전체 월급의 평균

-- 2. 새로운 사원 정보를 employees 테이블에 등록해주세요.

-- 3. 2에서 등록한 사원의 이름을 "길동", 성은 "홍" 으로 변경해 주세요.

-- 4. 2에서 등록한 사원을 삭제해 주세요.



SELECT AVG(salary)
FROM salaries
;



INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES (
	 1
	,DATE(19940517)
	,"YuJeong"
	,"Beak"
	,"F"
	,NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500003;


UPDATE employees
SET frist_name = "길동", last_name = "홍"  
WHERE emp_no = 1;



DELETE FROM employees 
WHERE emp_no = 1;


ROLLBACK;















