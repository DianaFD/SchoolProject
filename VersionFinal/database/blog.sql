create database blog;

CREATE TABLE `blog`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(255) NULL,
  `last_name` VARCHAR(255) NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `gender` CHAR(1) NULL,
  `age` INT(3) NULL,
  `role` ENUM('admin', 'user') NOT NULL DEFAULT 'user',
  `nick_name` VARCHAR(255) NULL,
  `last_login` TIMESTAMP NULL,
  `creation_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC));

  CREATE TABLE `blog`.`articles` (
  `id` INT(11) NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `content` MEDIUMTEXT NULL,
  `category_id` INT(11) NOT NULL,
  `main_image_url` VARCHAR(255) NULL,
  `user_id` INT(11) NOT NULL,
  `published` TINYINT(1) NOT NULL DEFAULT 0,
  `creation_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` TIMESTAMP NULL,
  PRIMARY KEY (`id`));
  
CREATE TABLE `blog`.`comments` (
    `id` INT NOT NULL,
    `title` VARCHAR(100) NOT NULL,
    `content` VARCHAR(255) NOT NULL,
    `user_id` INT(11) NOT NULL,
    `article_id` INT(11) NOT NULL,
    `deleted` TINYINT(1) NOT NULL DEFAULT 0,
    `creation_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `last_modified` TIMESTAMP NULL,
PRIMARY KEY (`id`));

CREATE TABLE `blog`.`category` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(255) NULL,
  `active` TINYINT(1) NOT NULL DEFAULT 0,
  `creation_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` TIMESTAMP NULL,
  PRIMARY KEY (`id`));
  
ALTER TABLE `blog`.`articles` 
ADD INDEX `art_uid_idx` (`user_id` ASC),
ADD INDEX `cid_idx` (`category_id` ASC);
ALTER TABLE `blog`.`articles` 
ADD CONSTRAINT `cid`
  FOREIGN KEY (`category_id`)
  REFERENCES `blog`.`category` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `art_uid`
  FOREIGN KEY (`user_id`)
  REFERENCES `blog`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
ALTER TABLE `blog`.`comments` 
ADD INDEX `aid_idx` (`article_id` ASC),
ADD INDEX `uid_idx` (`user_id` ASC);
ALTER TABLE `blog`.`comments` 
ADD CONSTRAINT `aid`
  FOREIGN KEY (`article_id`)
  REFERENCES `blog`.`articles` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `uid`
  FOREIGN KEY (`user_id`)
  REFERENCES `blog`.`users` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
