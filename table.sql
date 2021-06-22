-- Продукты
CREATE TABLE `products` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `price` DECIMAL(11,5) NOT NULL , `alias` VARCHAR(255) NULL DEFAULT NULL , `added` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `added_admin_id` INT(11) NOT NULL , `modified` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT NULL , `modified_admin_id` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

-- юзеры
CREATE TABLE `users` (
 `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `email_verified_at` timestamp NULL DEFAULT NULL,
 `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
 `created_at` timestamp NULL DEFAULT NULL,
 `updated_at` timestamp NULL DEFAULT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci

-- Изображения к продуктам
CREATE TABLE `products_imgs_name` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `product_id` INT(11) NOT NULL , `name` VARCHAR(255) NOT NULL , `lider` TINYINT(1) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

-- Категории
CREATE TABLE `products_category` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `alias` VARCHAR(255) NULL DEFAULT NULL , `parent` INT(11) NOT NULL DEFAULT '0' , `level` INT(2) NOT NULL DEFAULT '1' , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

-- Связка категории продуктов
CREATE TABLE .`products_category_bind` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `product_id` INT(11) NOT NULL , `category_id` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

-- Производители
CREATE TABLE `products_manufacturer` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `alias` VARCHAR(255) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

-- Связка производитлей с продуктами
CREATE TABLE `products_manufacturer_bind` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `product_id` INT(11) NOT NULL , `manufacturert_id` INT(11) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 

-- Произвольные поля для продуктов
CREATE TABLE `products_fields_random` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `product_id` INT(11) NOT NULL , `name` VARCHAR(255) NOT NULL , `alias_name` VARCHAR(255) NULL DEFAULT NULL , `value` INT(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 