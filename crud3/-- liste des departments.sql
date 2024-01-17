-- liste des departments
-- select * from DEPARTMENTS

-- liste des employees 
-- select * from EMPLOYEES 

-- nom , prenom et department_id de tous les employes
-- SELECT LAST_NAME, FIRST_NAME, DEPARTMENT_ID from EMPLOYEES

-- le nom department ayant department_id=90
-- select * from DEPARTMENTS where DEPARTMENT_ID=90
-- nom, prenom , nom depatement de chaque employe
-- jointure interne (inner join ) (Equijointure/ naturelle ) 
--   SELECT LAST_NAME, FIRST_NAME, DEPARTMENT_NAME,DEPARTMENTS.DEPARTMENT_ID
--   from EMPLOYEES , DEPARTMENTS
-- where DEPARTMENTS.DEPARTMENT_ID=EMPLOYEES.DEPARTMENT_ID -- condition de jointure

-- autre syntaxe
-- select e.LAST_NAME,e.FIRST_NAME,d.DEPARTMENT_NAME from 
-- EMPLOYEES e join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID
-- select * from COUNTRIES
-- liste des employees (nom et prenom ) qui travaillent en italie
-- select  e.LAST_NAME,e.FIRST_NAME , l.city,d.DEPARTMENT_NAME, c.COUNTRY_NAME from EMPLOYEES e 
-- join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID
-- join LOCATIONS l  on d.LOCATION_ID=l.LOCATION_ID
-- join  COUNTRIES c  on l.COUNTRY_ID=c.COUNTRY_ID
-- where c.COUNTRY_NAME='Canada'
-- tous les employes et leurs eventuels departments (cad qu'on veutr inclure aussi les employees n'ayant pas de departement)

-- select e.LAST_NAME,e.FIRST_NAME,d.DEPARTMENT_NAME from 
-- EMPLOYEES e left join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID
-- tous les departements avec leurs eventuels employe
-- select e.LAST_NAME,e.FIRST_NAME,d.DEPARTMENT_NAME from 
-- EMPLOYEES e  INNER  join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID

-- SELECT e.LAST_NAME,e.salary,d.department_name
-- from EMPLOYEEs e join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID 

-- select  e.last_name ,e.salary ,j.job_title from EMPLOYEES e 
-- join JOBS j on  j.JOB_ID=e.JOB_ID


-- select  e.last_name ,d.department_name ,j.job_title from EMPLOYEES e 
-- join JOBS j on  j.JOB_ID=e.JOB_ID 
-- join DEPARTMENTS d on d.DEPARTMENT_ID=e.DEPARTMENT_ID


-- select d.DEPARTMENT_name,avg(e.salary) from EMPLOYEES e
-- join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID
--  group by d.DEPARTMENT_NAME

-- select j.job_title , count(*) from EMPLOYEES e 
-- join jobs j on e.JOB_ID=j.JOB_ID 
-- group by j.JOB_TITLE
-- HAVING count(*) >=5
-- order by count(*) DESC, j.JOB_TITLE desc
-- les requetes imbriquees / sous requetes /nested queries
-- select LAST_NAME, SALARY from employees 
-- where salary >( select avg(salary) from EMPLOYEES)

-- select e.last_name, e.first_name, e.salary, d.DEPARTMENT_NAME
-- from EMPLOYEES e join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID
-- where d.DEPARTMENT_NAME='IT'
-- and e.SALARY>=(  
-- select avg(e.salary)
-- from EMPLOYEES e join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID
-- where d.DEPARTMENT_NAME='IT'
-- )

-- select d.DEPARTMENT_NAME , count(*) from employees e 
-- join departments d on e.DEPARTMENT_ID = d.DEPARTMENT_ID
-- group by d.DEPARTMENT_NAME
-- HAVING count(*) >=5

-- SELECT d.DEPARTMENT_NAME, COUNT(*) as "nbr d'employe", AVG(SALARY) from EMPLOYEES e
-- join DEPARTMENTS d on e.DEPARTMENT_ID = d.DEPARTMENT_ID group by D.DEPARTMENT_NAME


-- SELECT d.department_name, j.JOB_TITLE, MIN(SALARY),MAX(SALARY),AVG(SALARY)
-- FROM EMPLOYEES e
-- join JOBS j on e.JOB_ID=j.JOB_ID 
-- join DEPARTMENTS d  on d.department_id=e.DEPARTMENT_ID 
-- group by d.department_name, j.JOB_TITLE


select e.last_name, e.salary, j.job_title, d.DEPARTMENT_NAME, d.DEPARTMENT_ID,( select avg(e1.salary) from EMPLOYEES e1 join DEPARTMENTS d1 on e1.DEPARTMENT_ID=d1.DEPARTMENT_ID  where d1.DEPARTMENT_ID=d.department_id ) as avg_dep from EMPLOYEES e 
join JOBS j on e.JOB_ID=j.JOB_ID
join DEPARTMENTS d on d.DEPARTMENT_ID=e.DEPARTMENT_ID




