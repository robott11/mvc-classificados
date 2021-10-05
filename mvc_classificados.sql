-- create a database called "mvc_classificados"
-- then use mvc_classificados;

CREATE TABLE users(
	id int not null primary key auto_increment,
	name varchar(100) not null,
	email varchar(100) not null,
	password varchar(61) not null,
	telephone varchar(30)
);

CREATE TABLE categories(
	id int not null primary key auto_increment,
	name varchar(100) not null
);

CREATE TABLE posts(
	id int not null primary key auto_increment,
	id_user int not null,
	id_category int not null,
	title varchar(100) not null,
	description text,
	price float,
	state int(1)
);