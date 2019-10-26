create database my_db_2;

use my_db_2;

create table departments (id int auto_increment, name varchar(100),primary key (id));

show tables;

show columns from departments;

select * from departments;

select id,name from departments;

insert into departments (`name`) values ('Finance'); 

update departments set `name` = 'HR' where id = 1;

delete from departments where id = 4;

select `supervisor`,count(`supervisor`) as operate_departments
from departments 
group by `supervisor`
having count(`supervisor`) >= 1;

select min(id),max(id),count(*),sum(id),avg(id) from departments;

select distinct supervisor from departments;

select * from 
departments left join employee 
on departments.id = employee.department_id;

select * from 
departments right join employee 
on departments.id = employee.department_id
where departments.id is null;

select * from 
departments inner join employee 
on departments.id = employee.department_id;



