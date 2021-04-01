-- Таблица пользователей --
create table if not exists `user` (
    `id_user` int(10) unsigned not null auto_increment,
    `login` varchar(255) not null,
    `email` varchar(255) not null,
    `passsword` varchar(255) not null,
    `role` int(1) not null,
    primary key (id_user)
)
engine = innodb
auto_increment = 1
character set utf8
collate utf8_general_ci;

-- Данные из таблицы пользователей --
insert into `user` (`login`, `passsword`, `role`) values 
    ('admin', '1111','1');

create table if not exists `note` (
    `id_note` int(10) unsigned not null auto_increment,
    `id_user` int(10) not null,
    `text` varchar(255) not null,
    `datatime` timestamp default current_timestamp,
    primary key (id_note)
)
engine = innodb
auto_increment = 1
character set utf8
collate utf8_general_ci;

-- Таблица versions --
create table if not exists `versions` (
    `id` int(10) unsigned not null auto_increment,
    `name` varchar(255) not null,
    `created` timestamp default current_timestamp,
    primary key (id)
)
engine = innodb
auto_increment = 1
character set utf8
collate utf8_general_ci; 