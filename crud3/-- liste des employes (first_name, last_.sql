-- liste des employes (first_name, last_name, salary) avec le department_name
-- EQUI-JONTURE / JOINTURE INTERNE / jointure naturelle
-- select e.first_name, e.last_name, e.salary, d.DEPARTMENT_NAME, d.DEPARTMENT_ID FROM EMPLOYEES e , DEPARTMENTS d
-- where e.DEPARTMENT_ID=d.DEPARTMENT_ID
-- autre syntaxe 
-- select e.first_name, e.last_name, e.salary, d.DEPARTMENT_NAME, d.DEPARTMENT_ID
-- from employees e join departments d on e.department_id = d.DEPARTMENT_ID

select e.first_name, e.last_name, l.city from EMPLOYEES e 
join DEPARTMENTS d on e.DEPARTMENT_ID=d.DEPARTMENT_ID 
join LOCATIONS l on d.LOCATION_ID=l.LOCATION_ID 
where l.CITY='Seattle'