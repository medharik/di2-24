-- LID : SELECT 
SELECT * FROM  EMPLOYEES ORDER BY JOB_ID DESC
-- NOM COMPLET ET LE SALAIRE  DE TOUS LES EMPLOYES

SELECT FIRST_NAME || ' '||LAST_NAME  , SALARY FROM EMPLOYEES
-- NOM COMPLET ET LE SALAIRE  AVEC L'EVENTUELLE COMMISSION DE TOUS LES EMPLOYES

SELECT FIRST_NAME || ' '||LAST_NAME AS "nom complet"  ,salary ,commission_pct, NVL(commission_pct,0) ,SALARY +NVL(commission_pct,0) * salary  as "salaire net" FROM EMPLOYEES

-- liste des employes n'ayant pas de commission 

select * from employees where commission_pct is  null

-- ayant un salaire >= 8000 et un nom qui contient la lettre a

select * from employees where salary >=8000 and ( last_name like '%A%' OR last_name like '%a%' )
select  upper(last_name), last_name, salary from employees where salary >=8000 and  lower(last_name) like '%a%' 
-- les fonctions de groupe (aggregation) : count(*), max(salary), min(salary), sum(salary), avg(salary)

select count(*) as "nombre", max(salary), min(salary), sum(salary), avg(salary)  from employees

-- nombre d'employe ayant un salaire > 8000
select count(*) from employees where salary>8000
-- nombre d'employee par job_id
SELECT job_id, count(*) from employees 
group by job_id
-- salaire max par metier
select JOB_ID, max(salary) from employees
 group  by job_id
-- 
-- somme des salaires par departement , on selectionne les departements ayant une somme des salaires >10000
select department_id, sum(salary) from employees
 group  by department_id
having sum(salary) >=10000
-- 
-- nombre d'employee par metier qui contient 'a' , on ne garde que les jobs ayant un  nombre >10
SELECT job_id, count(*) from employees 
where    lower(job_id) like '%a%'
group by job_id
having count(*)>10
