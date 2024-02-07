-- auto jointure :
-- liste des employees subordones de stven king 
--  select * from EMPLOYEES where MANAGER_ID=( SELECT EMPLOYEE_ID from EMPLOYEES
 
--  where FIRST_NAME='Steven' and LAST_NAME ='King'
--  )
-- liste des employees et leurs managers
-- select m.FIRST_NAME, m.LAST_NAME , s.FIRST_NAME,s.LAST_NAME
-- from EMPLOYEES m join EMPLOYEES s on m.EMPLOYEE_ID=s.MANAGER_ID
-- order by m.LAST_NAME 

-- nombre de subordones par manager 
-- select m.FIRST_NAME, m.LAST_NAME , count(*)
-- from EMPLOYEES m join EMPLOYEES s on m.EMPLOYEE_ID=s.MANAGER_ID
-- GROUP by m.FIRST_NAME, m.LAST_NAME 
-- having count(*) = ( select max( count(*) )
-- from EMPLOYEES m join EMPLOYEES s on m.EMPLOYEE_ID=s.MANAGER_ID
-- GROUP by m.FIRST_NAME, m.LAST_NAME      )
-- order by count(*) desc 

-- select m.FIRST_NAME, m.LAST_NAME , count(*)
-- from EMPLOYEES m join EMPLOYEES s on m.EMPLOYEE_ID=s.MANAGER_ID
-- GROUP by m.FIRST_NAME, m.LAST_NAME 
-- having count(*) >= all   ( select  count(*) 
-- from EMPLOYEES m join EMPLOYEES s on m.EMPLOYEE_ID=s.MANAGER_ID
-- GROUP by m.FIRST_NAME, m.LAST_NAME      )
-- order by count(*) desc 
-- select nombre from (
    
-- select * from (
-- select m.FIRST_NAME, m.LAST_NAME , count(*) as nombre
-- from EMPLOYEES m join EMPLOYEES s on m.EMPLOYEE_ID=s.MANAGER_ID
-- GROUP by m.FIRST_NAME, m.LAST_NAME 
-- )
-- where FIRST_NAME like 'S%'
-- )

-- views : vues (Tables logiques ) (requetes enregistrees )
-- create view manager_nombre_subordones as (
-- select m.FIRST_NAME, m.LAST_NAME , count(*) as nombre
-- from EMPLOYEES m join EMPLOYEES s on m.EMPLOYEE_ID=s.MANAGER_ID
-- GROUP by m.FIRST_NAME, m.LAST_NAME 
-- )

-- select * from manager_nombre_subordones
