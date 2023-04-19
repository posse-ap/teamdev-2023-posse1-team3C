DROP DATABASE IF EXISTS posse;
CREATE DATABASE posse;
USE posse;

DROP TABLE IF EXISTS questions;
CREATE TABLE questions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  content VARCHAR(255),
  image VARCHAR(255),
  supplement VARCHAR(255)
) CHARSET=utf8;

DROP TABLE IF EXISTS choices;
CREATE TABLE choices (
  id INT AUTO_INCREMENT PRIMARY KEY,
  question_id INT,
  name VARCHAR(255),
  valid boolean,
  FOREIGN KEY (question_id) REFERENCES questions(id)
) CHARSET=utf8;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255)
) CHARSET=utf8;

insert into users (name, email, password) values ("管理者1", "admin@example.com", "$2y$10$csAFREneXMq1sdnuvOrFWe.ZW0kDM3Qigy1S0bhFJ3hhc6fgpMEIy");

DROP TABLE IF EXISTS user_invitations;
CREATE TABLE user_invitations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  -- expired_at DATETIME,
  invited_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  activated_at DATETIME,
  token VARCHAR(255),
  FOREIGN KEY (user_id) REFERENCES users(id)
) CHARSET=utf8;

insert into user_invitations (user_id, invited_at, activated_at, token) values (1, DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY), CURRENT_DATE, "token");
DROP DATABASE IF EXISTS TEAMDEV;

CREATE DATABASE TEAMDEV;

USE TEAMDEV;

DROP TABLE IF EXISTS AdminUsers;
CREATE TABLE AdminUsers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  mail VARCHAR(255),
  password VARCHAR(255)
) CHARSET=utf8;
insert into AdminUsers (mail, password) 
values ("admin@example.com", "$2y$10$csAFREneXMq1sdnuvOrFWe.ZW0kDM3Qigy1S0bhFJ3hhc6fgpMEIy");

DROP TABLE IF EXISTS ClientUsers;
CREATE TABLE ClientUsers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  mail VARCHAR(255),
  password VARCHAR(255),
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT "発行日時"
);
insert into ClientUsers (mail, password, created_at) values ("client@example.com", "$2y$10$csAFREneXMq1sdnuvOrFWe.ZW0kDM3Qigy1S0bhFJ3hhc6fgpMEIy", "2023-04-19 18:00:00");