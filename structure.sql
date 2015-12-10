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