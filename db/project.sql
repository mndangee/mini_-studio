drop database project;
create database project;

use project;


-- 유저정보
create table UserInfo (
    name VARCHAR(50) NOT NULL,
    userid VARCHAR(40) NOT NULL,
    passwd VARCHAR(50) NOT NULL,
    nickname VARCHAR(50) NOT NULL,
    description text,
    address VARCHAR(40) NOT NULL,
    primary key (userid)
);

insert into UserInfo values ('관리자','admin','1234','이카페','','admin');
insert into UserInfo values ('김민혜','kmhkgh','1234','김여행','','kmhkgh');
insert into UserInfo values ('박모씨','test','1234','박음식','','test');

select 'UserInfo table' as '';
select * from UserInfo;

-- 게시판및 게시글 정보
 create table Post  (
    post_id INT NOT NULL AUTO_INCREMENT,
    userid VARCHAR(50) NOT NULL,
    title VARCHAR(150) NOT NULL,
    subtitle VARCHAR(150) NOT NULL,
    content text not null,
    imgurl VARCHAR(512) NOT NULL,
    date date not null,
    primary key (post_id),
    foreign key (userid) references UserInfo(userid)
 );

select 'Post table' as '';
select * from Post;

-- --  댓글 정보

 create table Comment (
    comment_id INT NOT NULL AUTO_INCREMENT,
    post_id INT NOT NULL,
    userid VARCHAR(40) NOT NULL,
    comment text not null,
    date date not null,
    primary key (comment_id),
    foreign key (post_id) references Post(post_id),
    foreign key (userid) references UserInfo(userid)
 );

select 'Comment table' as '';
select * from Comment;

-- 댓댓글

 create table TComment (
    t_comment_id INT NOT NULL AUTO_INCREMENT,
    comment_id INT NOT NULL,
    post_id INT NOT NULL,
    userid VARCHAR(40) NOT NULL,
    comment text not null,
    date date not null,
    primary key (t_comment_id),
    foreign key (comment_id) references Comment(comment_id),
    foreign key (post_id) references Post(post_id),
    foreign key (userid) references UserInfo(userid)
 );

select 'TComment table' as '';
select * from TComment;

-- 이미지 업로드

create table Images (
    image_id INT NOT NULL AUTO_INCREMENT,
    userid VARCHAR(40) NOT NULL,
    filename VARCHAR(100) NOT NULL,
    imgurl VARCHAR(512) NOT NULL,
    size INT NOT NULL,
    primary key (image_id),
    foreign key (userid) references UserInfo(userid)
);

select 'Images table' as '';
select * from Images;

-- 게시글 좋아요

create table LikePost (
    like_id INT NOT NULL AUTO_INCREMENT,
    post_id INT NOT NULL,
    userid VARCHAR(50) NOT NULL,
    primary key (like_id),
    foreign key (userid) references UserInfo(userid),
    foreign key (post_id) references Post(post_id)
);

select 'LikePost table' as '';
select * from LikePost;