-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'chapitre'
-- 
-- ---

DROP TABLE IF EXISTS `chapitre`;
		
CREATE TABLE `chapitre` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'cours'
-- 
-- ---

DROP TABLE IF EXISTS `cours`;
		
CREATE TABLE `cours` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  `Date` DATETIME NULL DEFAULT NULL,
  `id_chapitre` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'exo'
-- 
-- ---

DROP TABLE IF EXISTS `exo`;
		
CREATE TABLE `exo` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  `id_cours` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'correction'
-- 
-- ---

DROP TABLE IF EXISTS `correction`;
		
CREATE TABLE `correction` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  `id_exo` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'user'
-- 
-- ---

DROP TABLE IF EXISTS `user`;
		
CREATE TABLE `user` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  `mdp` VARCHAR(45) NULL DEFAULT NULL,
  `id_type_user` INTEGER NULL DEFAULT NULL,
  `id_promotion` INTEGER NULL DEFAULT NULL,
  `id_prof` INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'type_user'
-- 
-- ---

DROP TABLE IF EXISTS `type_user`;
		
CREATE TABLE `type_user` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'promotion'
-- 
-- ---

DROP TABLE IF EXISTS `promotion`;
		
CREATE TABLE `promotion` (
  `id` INTEGER NULL AUTO_INCREMENT DEFAULT NULL,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `cours` ADD FOREIGN KEY (id_chapitre) REFERENCES `chapitre` (`id`);
ALTER TABLE `exo` ADD FOREIGN KEY (id_cours) REFERENCES `cours` (`id`);
ALTER TABLE `correction` ADD FOREIGN KEY (id_exo) REFERENCES `exo` (`id`);
ALTER TABLE `user` ADD FOREIGN KEY (id_type_user) REFERENCES `type_user` (`id`);
ALTER TABLE `user` ADD FOREIGN KEY (id_promotion) REFERENCES `promotion` (`id`);
ALTER TABLE `user` ADD FOREIGN KEY (id_prof) REFERENCES `user` (`id`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `chapitre` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `cours` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `exo` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `correction` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `user` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `type_user` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `promotion` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `chapitre` (`id`,`nom`) VALUES
-- ('','');
-- INSERT INTO `cours` (`id`,`nom`,`Date`,`id_chapitre`) VALUES
-- ('','','','');
-- INSERT INTO `exo` (`id`,`nom`,`id_cours`) VALUES
-- ('','','');
-- INSERT INTO `correction` (`id`,`nom`,`id_exo`) VALUES
-- ('','','');
-- INSERT INTO `user` (`id`,`nom`,`mdp`,`id_type_user`,`id_promotion`,`id_prof`) VALUES
-- ('','','','','','');
-- INSERT INTO `type_user` (`id`,`nom`) VALUES
-- ('','');
-- INSERT INTO `promotion` (`id`,`nom`) VALUES
-- ('','');