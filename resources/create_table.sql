DROP TABLE IF EXISTS `schtest`;
DROP TABLE IF EXISTS `school`;


CREATE TABLE `school` (
  `schId`          INT(255) NOT NULL AUTO_INCREMENT,
  `schName`        VARCHAR(255)      DEFAULT NULL,
  `schCanteenName` VARCHAR(255)      DEFAULT NULL,
  `schDepart`      VARCHAR(255)      DEFAULT NULL,
  `schStudentNum`  VARCHAR(255)      DEFAULT NULL,
  `schAddress`     VARCHAR(255)      DEFAULT NULL,
  `schtClient`     VARCHAR(255)      DEFAULT NULL,
  `schChef`        VARCHAR(255)      DEFAULT NULL,
  `schPeople`      VARCHAR(255)      DEFAULT NULL,
  `schNameSurvey`  VARCHAR(255)      DEFAULT NULL,
  `schSurveyDate`  VARCHAR(255)      DEFAULT NULL,
  `schTain`        VARCHAR(255)      DEFAULT NULL,
  `schService`     VARCHAR(255)      DEFAULT NULL,
  `schLuch`        VARCHAR(255)      DEFAULT NULL,
  `schSurvey`      VARCHAR(255)      DEFAULT NULL,
  `schDistric`     VARCHAR(255)      DEFAULT NULL,
  `schProvince`    VARCHAR(255)      DEFAULT NULL,
  PRIMARY KEY (`schId`)
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 110
  DEFAULT CHARSET = utf8;
CREATE TABLE `schtest` (
  `idschtest`    INT(255) NOT NULL AUTO_INCREMENT,
  `ex1`          VARCHAR(255)      DEFAULT NULL,
  `ex2`          VARCHAR(255)      DEFAULT NULL,
  `ex3`          VARCHAR(255)      DEFAULT NULL,
  `ex4`          VARCHAR(255)      DEFAULT NULL,
  `ex5`          VARCHAR(255)      DEFAULT NULL,
  `ex6`          VARCHAR(255)      DEFAULT NULL,
  `ex7`          VARCHAR(255)      DEFAULT NULL,
  `ex8`          VARCHAR(255)      DEFAULT NULL,
  `ex9`          VARCHAR(255)      DEFAULT NULL,
  `ex10`         VARCHAR(255)      DEFAULT NULL,
  `ex11`         VARCHAR(255)      DEFAULT NULL,
  `ex12`         VARCHAR(255)      DEFAULT NULL,
  `ex13`         VARCHAR(255)      DEFAULT NULL,
  `ex14`         VARCHAR(255)      DEFAULT NULL,
  `ex15`         VARCHAR(255)      DEFAULT NULL,
  `ex16`         VARCHAR(255)      DEFAULT NULL,
  `ex17`         VARCHAR(255)      DEFAULT NULL,
  `ex18`         VARCHAR(255)      DEFAULT NULL,
  `ex19`         VARCHAR(255)      DEFAULT NULL,
  `ex20`         VARCHAR(255)      DEFAULT NULL,
  `ex21`         VARCHAR(255)      DEFAULT NULL,
  `ex22`         VARCHAR(255)      DEFAULT NULL,
  `ex23`         VARCHAR(255)      DEFAULT NULL,
  `ex24`         VARCHAR(255)      DEFAULT NULL,
  `ex25`         VARCHAR(255)      DEFAULT NULL,
  `ex26`         VARCHAR(255)      DEFAULT NULL,
  `ex27`         VARCHAR(255)      DEFAULT NULL,
  `ex28`         VARCHAR(255)      DEFAULT NULL,
  `ex29`         VARCHAR(255)      DEFAULT NULL,
  `ex30`         VARCHAR(255)      DEFAULT NULL,
  `com1`         VARCHAR(255)      DEFAULT NULL,
  `com2`         VARCHAR(255)      DEFAULT NULL,
  `com3`         VARCHAR(255)      DEFAULT NULL,
  `com4`         VARCHAR(255)      DEFAULT NULL,
  `com5`         VARCHAR(255)      DEFAULT NULL,
  `com6`         VARCHAR(255)      DEFAULT NULL,
  `com7`         VARCHAR(255)      DEFAULT NULL,
  `com8`         VARCHAR(255)      DEFAULT NULL,
  `com9`         VARCHAR(255)      DEFAULT NULL,
  `com10`        VARCHAR(255)      DEFAULT NULL,
  `com11`        VARCHAR(255)      DEFAULT NULL,
  `com12`        VARCHAR(255)      DEFAULT NULL,
  `com13`        VARCHAR(255)      DEFAULT NULL,
  `com14`        VARCHAR(255)      DEFAULT NULL,
  `com15`        VARCHAR(255)      DEFAULT NULL,
  `com16`        VARCHAR(255)      DEFAULT NULL,
  `com17`        VARCHAR(255)      DEFAULT NULL,
  `com18`        VARCHAR(255)      DEFAULT NULL,
  `com19`        VARCHAR(255)      DEFAULT NULL,
  `com20`        VARCHAR(255)      DEFAULT NULL,
  `com21`        VARCHAR(255)      DEFAULT NULL,
  `com22`        VARCHAR(255)      DEFAULT NULL,
  `com23`        VARCHAR(255)      DEFAULT NULL,
  `com24`        VARCHAR(255)      DEFAULT NULL,
  `com25`        VARCHAR(255)      DEFAULT NULL,
  `com26`        VARCHAR(255)      DEFAULT NULL,
  `com27`        VARCHAR(255)      DEFAULT NULL,
  `com28`        VARCHAR(255)      DEFAULT NULL,
  `com29`        VARCHAR(255)      DEFAULT NULL,
  `com30`        VARCHAR(255)      DEFAULT NULL,
  `school_schId` INT(255) NOT NULL,
  `img1`         LONGTEXT,
  `img2`         LONGTEXT,
  `img3`         LONGTEXT,
  `img4`         LONGTEXT,
  `result`       VARCHAR(255)      DEFAULT NULL,
  PRIMARY KEY (`idschtest`),
  KEY `fk_schtest_school1_idx`(`school_schId`),
  CONSTRAINT `fk_schtest_school1` FOREIGN KEY (`school_schId`) REFERENCES `school` (`schId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 23
  DEFAULT CHARSET = utf8;