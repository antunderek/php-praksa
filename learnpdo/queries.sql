CREATE USER 'inchoo'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'inchoo'@'%';

create table users (
    id int not null auto_increment,
    username varchar(255) not null,
    email varchar(255) not null,
    primary key (id)
);

insert into users(username, email) values ("alex", "alex@email.com");
insert into users(username, email) values ("billy", "billy@email.com");

ALTER TABLE users ADD active TINYINT NOT NULL DEFAULT 0;
alter table users drop column active;

alter table users add last_name VARCHAR(255) NOT NULL;
update users set last_name = "Garret";
