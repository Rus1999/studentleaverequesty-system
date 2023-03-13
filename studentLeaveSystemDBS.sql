create database StudentLeaveSystem
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use StudentLeaveSystem;

create table StudentLeave(
    leave_id int(10) null AUTO_INCREMENT PRIMARY KEY,
    leave_title varchar(100) not null,
    leave_reason text(500) not null,
    leave_type int(1) not null comment '0:Business, 1:Sick',
    leave_startDate date not null,
    leave_endDate date not null,
    leave_picture varchar(100) null,
    leave_member_id int(10) not null,
    leave_admin_id int(10) null,
    leave_status int(1) not null comment '0: unapprove, 1: approved'
);

create table Users(
    user_id int(10) null AUTO_INCREMENT PRIMARY KEY,
    user_username varchar(25) not null,
    user_password varchar(100) not null,
    user_firstName varchar(100) not null,
    user_lastName varchar(100) not null,
    user_email varchar(100) not null,
    user_phonenumber varchar(10) not null,
    user_status int(1) not null comment '0:Admin, 1:Member',
    admin_id int(10) null
);