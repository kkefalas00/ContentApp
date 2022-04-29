create database project_db;
use project_db;


create table users (
		
		id int primary key auto_increment,
		onoma varchar(50),
		tilefono int,
		email varchar(40) unique,
		password varchar(50),
		filo text

);

create table content(

		id int primary key auto_increment,
		id_user int,
		titlos varchar(50),
		perigrafi varchar(100),
		imerominia date,
		url varchar(150),

foreign key(id_user) references users(id)

);

