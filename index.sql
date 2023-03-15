drop database if exist todo;

create database todo;

use todo;

create table task (id int PRIMARY key AUTO_INCREMENT, description TEXT not null);

insert into task (description) values ('Test task');
insert into task (description) values ('Another test task');