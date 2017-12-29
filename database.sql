create table if not exists users (
	id int(11) not null auto_increment,
	name varchar(255) not null,
	url varchar(255) not null,
	primary key(id)
);

insert into users (id, name, url) values (1, 'Alexandre', 'alexandre.com'), (2, 'Sara', 'sarajoviano@gmail.com'), (3, 'Letícia', 'leticiamsilva@gmail.com');