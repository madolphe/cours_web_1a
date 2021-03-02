drop table if exists user;
drop table if exists movie;

create table movie (
    mov_id integer not null primary key auto_increment,
    mov_title varchar(100) not null,
    mov_description_short varchar(500) not null,
    mov_description_long varchar(2000) not null,
    mov_director varchar(150) not null,
    mov_year integer not null,
    mov_image varchar(150)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table user (
    usr_id integer not null primary key auto_increment,
    usr_login varchar(50) not null,
    usr_password varchar(88) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;