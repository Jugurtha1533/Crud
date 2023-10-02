DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `lang`;



CREATE TABLE `lang` (

    `langID` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `codeLang` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `description` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    PRIMARY KEY (`langID`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `products` (
  `productID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `reference` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `priceTaxTnc` double NOT NULL DEFAULT '0',
  `priceTaxExcl` double NOT NULL DEFAULT '0',
  `unitsInStock` smallint(5) unsigned NOT NULL DEFAULT '0',
  `langID`  int(10) unsigned NOT NULL ,
  PRIMARY KEY (`productID`),
  KEY `idx_products_product_name` (`productName`),
  CONSTRAINT `FK_products_lang` FOREIGN KEY (`langID`) REFERENCES `lang` (`langID`)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO lang (codeLang, description) values
('fr', 'Français'),
('en', 'English');