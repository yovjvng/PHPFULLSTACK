-- 1. 사원의 사원번호, 풀네임, 직책명을 출력해 주세요.
-- 2. 사원의 사원번호, 성별, 현재 월급을 출력해 주세요.
-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요.
-- 4. 사원의 사원번호, 풀네임, 소속부서명을 출력해 주세요.
-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해 주세요.
-- 6. 각 부서의 부서장의 부서명, 풀네임,입사일을 출력해 주세요.
-- 7. 현재 직책이 'Staff'인 사원의 현재 전체 평균 월급을 출력해 주세요.
-- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출려해 주세요.
-- 9. 현재 각 직급별 평균 월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해 주세요.
-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력해 주세요.

-- 11. 직급별 퇴사한 남자 사원



1.
SELECT emp.emp_no, CONCAT(last_name,' ', first_name) AS fullname, tit.title
FROM employees emp
	INNER JOIN titles tit
		ON emp.emp_no = tit.emp_no
WHERE tit.to_date >= NOW()		
		;				

2.
SELECT emp.emp_no, emp.gender, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW();

3.
SELECT CONCAT(last_name,' ', first_name) AS fullname, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010;

4.- 과거코드나옴
SELECT emp.emp_no, CONCAT(last_name, ' ', first_name) AS fullname, depm.dept_name
FROM employees emp
	INNER JOIN dept_emp dep
		ON emp.emp_no = dep.emp_no
	INNER JOIN departments depm
		ON dep.dept_no = depm.dept_no;

5.
-- 첫번째방법
SELECT  emp.emp_no, CONCAT(last_name, ' ', first_name) AS fullname, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW()			
	ORDER BY sal.salary desc
LIMIT 10
;

-- 두번째 방법
SELECT a.*
FROM (
	SELECT emp.emp_no, CONCAT(emp.first_name, ' ' , emp.last_name) fullname, salary, RANK() over (ORDER BY salary DESC) rn
	FROM employees emp
		INNER JOIN salaries sal
			ON emp.emp_no = sal.emp_no
	WHERE sal.to_date >= NOW()) a
WHERE a.rn <= 10;	
 


6. **

SELECT dept.dept_name, CONCAT(last_name, ' ', first_name) fullname, emp.hire_date
FROM departments dept
	INNER JOIN dept_manager depm
	ON dept.dept_no = depm.dept_no
	INNER JOIN employees emp
	ON emp.emp_no = depm.emp_no
WHERE depm.to_date >= NOW();

		
7.
SELECT tit.title, AVG(salary) AS sal
FROM titles tit
	INNER JOIN salaries sal
		ON tit.emp_no = sal.emp_no
WHERE tit.title = 'Staff'
 AND sal.to_date >= NOW()
 AND tit.to_date >= NOW();
 

8.
SELECT CONCAT(last_name, ' ', first_name) AS fullname, emp.hire_date, emp.emp_no, depm.dept_no
FROM employees emp
	INNER JOIN dept_manager depm
	ON emp.emp_no = depm.emp_no
WHERE depm.to_date < '9999-01-01'
-- WHERE depm.to_date != '9999-01-01'   != 다르다은 의미
;


9. 
SELECT tit.title, CAST(AVG(salary) AS INT) a
FROM titles tit
	INNER JOIN salaries sal
		ON tit.emp_no = sal.emp_no
WHERE sal.to_date = DATE(99990101)
	AND tit.to_date = DATE(99990101)
GROUP BY tit.title HAVING a >= 60000
ORDER BY a DESC;




SELECT tit.title, TRUNCATE(AVG(salary), 0) avg_s
FROM titles tit
	INNER JOIN salaries sal
	ON sal.emp_no = tit.emp_no
WHERE tit.to_date = DATE(99990101)
AND sal.to_date = DATE(99990101)
GROUP BY tit.title HAVING avg_s >=60000
ORDER BY avg_s DESC ;	


10.
SELECT tit.title, COUNT(*)
FROM employees emp
	INNER JOIN titles tit
		ON emp.emp_no = tit.emp_no
WHERE emp.gender = 'F'
  AND tit.to_date = DATE(99990101)
GROUP BY tit.title;
	


11.
SELECT tit.title, COUNT(employee)
FROM employees emp
	LEFT OUTER JOIN salaries sal
		ON sal.emp_no = tit.emp_no
WHERE sal.salary <='9999-01-01' AND emp.gender = 'M'	
GROUP BY tit.title		
		;
		
		

						









		
			