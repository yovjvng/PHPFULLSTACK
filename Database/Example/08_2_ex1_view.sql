-- 1. VIEW란?
-- 	가상의 테이블로, 보안과 함께 사용자의 편의성을 높이기 위해 사용합니다.
-- 	여러테이블을 조인 할 시에 view를 생성하여, 
-- 	복잡한 SQL을 편리하게 조회 할 수 있는 장점이 있습니다.

-- 	뷰를 

-- 2. VIEW 생성
-- 	CREATE [OR REPLACE] VIEW 뷰명
-- 	AS
-- 		SELECT 문
-- 	;
-- 	** [OR REPLACE] : 기존의 뷰가 있을 경우 덮어쓰기를 합니다. **
CREATE OR REPLACE VIEW test_view
AS
	SELECT tit.title, COUNT(*) cnt
	FROM employees emp
		INNER JOIN titles tit
		ON emp.emp_no = tit.emp_no
	WHERE emp.gender = 'F'
  		AND tit.to_date = DATE(99990101)
	GROUP BY tit.title;
	

SELECT * 
FROM test_view2;

-- 3. VIEW 삭제
-- 	DROP 뷰명;
DROP VIEW test_view;


-- 사원의 사원번호, 풀네임, 현재 소속부서명을 출력해 주세요.
CREATE VIEW test_view2
AS
	SELECT emp.emp_no, CONCAT(last_name,' ', first_name) AS fullname, depm.dept_name
	FROM employees emp
		INNER JOIN dept_emp dep_m
		ON emp.emp_no = dep_m.emp_no
		INNER JOIN departments depm
		ON dep_m.dept_no = depm.dept_no
	WHERE dep_m.to_date >= NOW()		
		;	

