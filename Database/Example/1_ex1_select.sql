0. SELECT문의 기본 구조
	SELECT [DISTINCT] [컬럼명]
	FROM [테이블명]
	WHERE [쿼리 조건]
	GROUP BY [컬럼명] HAVING [집계함수 조건]
	ORDER BY [컬럼명 ASC || 컬럼명 DESC]
	;

1. 테이블 전체 조회 : SELECT [컬럼명] FROM [테이블명] ;
	- *(Asterisk)로 조회
		SELECT *
		FROM employees;

	- 컬럼명으로 조회
		SELECT emp_no
		FROM employees;

		SELECT emp_no, first_name
		FROM employees;

2. 특정 조건으로 조회 : SELECT [컬럼명] FROM [테이블명] WHERE [쿼리 조건];
	- 특정 데이터와 일치하는 조회
		SELECT *
		FROM employees
		WHERE emp_no = 10001;

		SELECT *
		FROM employees
		WHERE first_name = 'Georgi';
	
	- 관계 연산자를 이용하여 조회
		SELECT *
		FROM employees
		WHERE emp_no <= 10005;
	
	- AND, OR로 여러 조건을 설정하여 조회
		SELECT *
		FROM employees
		WHERE emp_no <= 10001
		  AND emp_no <= 10005;

		SELECT *
		FROM employees
		WHERE emp_no <= 10003
		   OR emp_no >= 499997;

	- BETWEEN [A] AND [B]로 해당 범위 내의 데이터 조회
		SELECT *
		FROM employees
		WHERE emp_no BETWEEN 10003 AND 10010;
	
	- IN()으로 해당 데이터 조회
		SELECT *
		FROM employees
		WHERE emp_no IN( 10003, 10010 );

	- LIKE로 문자열의 내용을 조회
		> "%"는 무엇이든 허용한다는 의미입니다.
			SELECT *
			FROM employees
			WHERE first_name like( '%eo' );

			SELECT *
			FROM employees
			WHERE first_name like( 'eo%' );

		>"_"는 "_"의 개수만큼 허용합니다. "__"인 경우는 2글자라면 무엇이든 허용한다는 의미입니다.
			SELECT *
			FROM employees
			WHERE first_name like( '_eorgi' );

			SELECT *
			FROM employees
			WHERE first_name like( 'Georg_' );

	- ORDER BY로 정렬하여 조회
		> ASC : 오름차순으로 정렬합니다.
			SELECT *
			FROM employees
			ORDER BY emp_no ASC;
		> DESC : 내림차순으로 정렬합니다.
			SELECT *
			FROM employees
			ORDER BY emp_no DESC;

	- DISTINCT로 중복값 없이 조회
		SELECT DISTINCT dept_no
		FROM dept_manager;
	
	- LIMIT로 출력 개수를 제한하여 조회
		SELECT *
		FROM employees
		LIMIT 5;

		SELECT *
		FROM employees
		LIMIT 5 OFFSET 10;

3. 서브쿼리(SubQuery) : 쿼리 안에 또다른 쿼리가 있는 형태
	SELECT *
	FROM dept_manager
	WHERE
		dept_no = (
					SELECT dept_no 
					FROM dept_manager
					WHERE emp_no = 110114
				  );

4. ANY / ALL
	- 서브쿼리의 결과가 2개 이상이라 에러가 납니다. **
		SELECT *
		FROM dept_manager
		WHERE dept_no = (
						  SELECT dept_no 
						  FROM dept_manager
						  WHERE dept_no = 'd002'
					    );

	- ANY를 사용하면 2개 이상의 결과 중 하나라도 만족하는 데이터를 조회합니다.
		SELECT *
		FROM dept_manager
		WHERE dept_no = ANY (
							  SELECT dept_no 
							  FROM dept_manager
							  WHERE dept_no = 'd002'
						    );

	- ALL을 사용하면 2개 이상의 결과 모두를 만족하는 데이터를 조회합니다.
		SELECT *
		FROM dept_manager
		WHERE dept_no = ALL (
							  SELECT dept_no 
							  FROM dept_manager
							  WHERE dept_no = 'd002'
					  	    );

5. 집계 함수
	- SUM(컬럼명) : 합계를 구합니다.
	- AVG(컬럼명) : 평균을 구합니다.
	- MAX(컬럼명) : 최대값을 구합니다.
	- MIN(컬럼명) : 최소값을 구합니다.
	- COUNT(컬럼명) : 개수를 구합니다.

6. 그룹으로 묶어서 조회 : GROUP BY 컬럼명 [ HAVING 집계함수조건 ]
	SELECT dept_no, COUNT(emp_no) AS cnt
	FROM dept_manager
	GROUP BY dept_no
	HAVING cnt > 2;


SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no HAVING avg_s >=30000 AND 
avg_s <=50000;

SELECT CONCAT(last_name,'',first_name) AS fullname
FROM employees;

SELECT *
FROM dept_manager
WHERE dept_no = ALL 
					(
						SELECT dept_no 
						FROM dept_manager
						WHERE emp_no IN (110344, 111035)
					);
					
					
					
SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM salaries
						GROUP BY emp_no 
						HAVING AVG(salary) >=70000
					);
					

SELECT * ,NOW()
FROM titles
WHERE emp_no = 10009
  AND to_date >= NOW(); 		
  
  
EXPLAIN 
SELECT emp_no, last_name
FROM employees
WHERE emp_no in
				(
					SELECT emp_no
					FROM titles
					WHERE title = 'Senior Engineer' 
					AND to_date >= NOW() 
				);
		

		
					

