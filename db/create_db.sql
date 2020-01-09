use mysql;

delete from user where User='project' and Host='127.0.0.1';
insert into user(User, Host, password) values ('project', '127.0.0.1', password('bitnami'));
flush privileges; 

drop database if exists project;
create database project;

grant all on project.* to 'project'@'localhost' identified by 'bitnami';
flush privileges;
