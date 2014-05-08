
SHOW DATABASES;
SHOW TABLES;
-- 创建数据库：
CREATE DATABASE baijiashop;
DROP DATABASE baijiashop;
USE baijiashop;
-- 创建用户表：
DROP TABLE users;
CREATE TABLE users(
     id INT NOT NULL AUTO_INCREMENT,
     user_name VARCHAR(20),
     PASSWORD VARCHAR(20),
     real_name VARCHAR(20),
     gender VARCHAR(2),
     address VARCHAR(50),
     qq  VARCHAR(20),
     email VARCHAR(50),
     telephone VARCHAR(20),
     birthday DATE,
     user_type INT,
     PRIMARY KEY(id)
);

-- 显示表结构：
DESC users;
SELECT * FROM users;

-- 创建用户类型表：
DROP TABLE user_type;
CREATE TABLE user_type(
     id INT NOT NULL AUTO_INCREMENT,
     type_name VARCHAR(20),
     PRIMARY KEY(id)
);
-- 显示表结构：
DESC user_type;
SELECT * FROM goods_type;
-- 创建商品类型表：
百货商场里面哪些商品，我现在只知道电器、服装、日用品、化装品和首饰
CREATE TABLE goods_type(
     ID INT NOT NULL AUTO_INCREMENT,
     type_name VARCHAR(20),
     type_desc VARCHAR(20),
     PRIMARY KEY(ID)
);
USE goods_type;
DESC goods_type;
DROP TABLE goods_type;
SHOW TABLES;
插入数据：
INSERT INTO goods_type(
          wiring,
          costume,
          commodity,
          makeup,
          jewerry,
          qq,
          email,
          telephone,
          birthday,
          user_type
     ) VALUES (
          '".$_user_name."',
          '".$_password."',
          '".$_real_name."',
          '".$_gender."',
          '".$_address."',
          '".$_qq."',
          '".$_email."',
          '".$_telephone."',
          '".$_birthday."',
          1
);
创建商品表：
CREATE TABLE goods(
     id INT NOT NULL AUTO_INCREMENT,
     goods_name VARCHAR(20),
     goods_type VARCHAR(20),
     jiage FLOAT(6,2),
     tupian VARCHAR(20),
     rukucaozouyuan VARCHAR(50),
     rukuriqi  DATE,
     kucunshu VARCHAR(50),
     shangjiariqi DATE,
     shangjiacaozouyuan  VARCHAR(20),
     biaoqian VARCHAR(50),
     shifoushangjia VARCHAR(1),
     shifouxinpin VARCHAR(1),
     shifoutuijian VARCHAR(1),
     shangpinmiaoshu VARCHAR(200),
     PRIMARY KEY(id)
);
DROP TABLE goods;
插入商品数据：
INSERT INTO goods(
          goods_name,
          goods_type,
          jiage,
          tupian,
          rukucaozouyuan,
          rukuriqi,
          kucunshu,
          shangjiariqi,
          shangjiacaozuoyuan,
          biaoqian,
          shifoushangjia,
          shifouxinpin,
          shifoutuijian,
          shangpinmiaoshu
     ) VALUES (
          '".$_goods_name."',
          '".$_goods_type."',
          ".$_jiage.",
          '".$_tupian."',
          ".$_SESSION['uId'].",
          '".date('Y-m-d H:i:s')."',   
          '".$_kucunshu."',
          '".date('Y-m-d H:i:s')."',
          ".$_SESSION['uId'].",
          '".$_biaoqian."',
          '".$_shifoushangjia."',
          '".$_shifouxinpin."',
          '".$_shifoutuijian."',
          '".$_shangpinmiaoshu."'
);


SELECT * FROM users;

UPDATE users SET user_type=2 WHERE id=2; 个人也可以管理， 看到商品的添加，商品类型等于二

SELECT * FROM goods;

SELECT * FROM goods_type; 

创建购物车；
CREATE TABLE gouwuche(
    id INT NOT NULL AUTO_INCREMENT,
     USER VARCHAR(20),
     goods VARCHAR(20),
     goods_name VARCHAR(20),
     jiage FLOAT(6,3),
     shuliang VARCHAR(20),
     PRIMARY KEY(ID)
);

DROP TABLE gouwuche;