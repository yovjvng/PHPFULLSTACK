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
		
		
		
					

