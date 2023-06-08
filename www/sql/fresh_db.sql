/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 8.0.30 : Database - test_shah_educational_academy
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test_shah_educational_academy` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `test_shah_educational_academy`;

/*Table structure for table `assignments` */

DROP TABLE IF EXISTS `assignments`;

CREATE TABLE `assignments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `assignments` */

insert  into `assignments`(`id`,`title`,`document`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'SYJC Accounts Worksheet 1 Bill of Exchange.','jy6DFB8JwEbwZPhbI6pnEuDyEKCq2pbljnv3ZW3Y.pdf','2023-06-08 06:51:07',2,'2023-06-08 06:51:07',NULL,NULL,NULL),
(2,'SYJC Accounts Worksheet 2 Single Entry System.','7zH9tFEHjZ2iAZxtasQPTvoPAh4c5J7rrHk8q5sy.pdf','2023-06-08 06:51:56',2,'2023-06-08 06:51:56',NULL,NULL,NULL),
(3,'SYJC Maths Assignment 1 (10-5-19)','JdAfMuTggvrEimsAnV5tx9ECb39JuNHCFk9sPHjo.pdf','2023-06-08 06:52:24',2,'2023-06-08 06:52:24',NULL,NULL,NULL),
(4,'FYJC Accounts Work Sheet 1','nKMQ3tbveuWZhhpQF9dbXDnLKOiJCoEZritDeRTE.pdf','2023-06-08 06:52:52',2,'2023-06-08 06:54:34',2,NULL,NULL),
(5,'FYJC Accounts Worksheet 2','50npWknAHs4NLptbqY0wefAHKqbxy1BFQXyA90qH.pdf','2023-06-08 06:55:04',2,'2023-06-08 06:55:04',NULL,NULL,NULL),
(6,'Journal Worksheet No. 3 (17-8-19)','Him5iDWXtvxbuMHquPsV3JWFH7PSZLXq1pnKxmfW.pdf','2023-06-08 06:55:26',2,'2023-06-08 06:55:26',NULL,NULL,NULL),
(7,'FYJC Accounts Diwali Assignments','Ym9yCN9Zc9qZTOvoSBFnyqxIS0c8nLvJrsLRqwWi.pdf','2023-06-08 06:55:50',2,'2023-06-08 06:55:50',NULL,NULL,NULL),
(8,'FYJC Accounts Journal & Subsidiary Book (Work Sheet)','Uyo0VeA2TzjKtmUeD8u8XLXg9kzG9GwxWkzfmjSH.pdf','2023-06-08 06:56:23',2,'2023-06-08 06:56:23',NULL,NULL,NULL);

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`subject`,`name`,`email`,`mobile`,`message`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'Parent\'s query','Desiree Townsend','giheq@mailinator.com','4848484848','Nesciunt sunt neces','2023-06-08 05:46:57',NULL,'2023-06-08 05:46:57',NULL,NULL,NULL),
(3,'Register a complaint','Dillon Holloway','woquwysoh@mailinator.com','7878787854','Similique nulla arch','2023-06-08 05:52:35',NULL,'2023-06-08 05:52:35',NULL,NULL,NULL),
(6,'Work with SEA','Darrel Gates','cugetamyx@mailinator.com','7897894562','Eius laborum Id en','2023-06-08 05:54:20',NULL,'2023-06-08 05:54:20',NULL,NULL,NULL),
(7,'Feedback','Jemima Mcgowan','kesenosohy@mailinator.com','7878787878','Ut amet ex sint con','2023-06-08 05:54:38',NULL,'2023-06-08 05:54:38',NULL,NULL,NULL),
(8,'Feedback','Jemima Mcgowan','kesenosohy@mailinator.com','7878787878','Ut amet ex sint con','2023-06-08 05:56:33',NULL,'2023-06-08 05:56:33',NULL,NULL,NULL),
(9,'Franchise registration','Reese Hester','tyfag@mailinator.com','7878965482','Commodo officiis sed','2023-06-08 05:57:31',NULL,'2023-06-08 05:57:31',NULL,NULL,NULL),
(11,'dfhdh','Jolene Cote','foqyloqun@mailinator.com','7987989747','Voluptatem modi lore','2023-06-08 06:11:22',2,'2023-06-08 06:11:22',NULL,NULL,NULL),
(13,'Register a complaint','Yasir Sparks','suvozyq@mailinator.com','4656565656','Ullamco dolor quia p','2023-06-08 06:16:09',2,'2023-06-08 06:16:09',NULL,NULL,NULL),
(14,'Parent\'s query','Abel Collier','siku@mailinator.com','7846455444','Odio fugiat at et s','2023-06-08 06:16:18',2,'2023-06-08 06:16:18',NULL,NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `mail_templates` */

DROP TABLE IF EXISTS `mail_templates`;

CREATE TABLE `mail_templates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `template_code` varchar(255) DEFAULT NULL,
  `template_name` varchar(255) DEFAULT NULL,
  `mailable` varchar(255) NOT NULL,
  `subject` text,
  `html_template` longtext NOT NULL,
  `text_template` longtext,
  `template_type` enum('SMS','EMAIL') DEFAULT 'EMAIL',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `mail_templates` */

insert  into `mail_templates`(`id`,`template_code`,`template_name`,`mailable`,`subject`,`html_template`,`text_template`,`template_type`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(19,'create_user_notification','Create user notification','App\\Mail\\UserCreateNotification','User Create Notification','<p>Hello {{NAME}}</p>\r\n\r\n<p>We have created your account in {{PRACTICE_NAME}} backen and below is the login details.</p>\r\n\r\n<p>Username: {{USER}}</p>\r\n\r\n<p>Password: {{PASSWORD}}</p>\r\n\r\n<p>{{LOGIN}}</p>\r\n\r\n<p>Regards,<br />\r\n{{PRACTICE_NAME}}</p>\r\n\r\n<p><span style=\"color:#e74c3c\"><strong>DO NOT REPLY TO THIS E-MAIL</strong></span><br />\r\nThis is an automated e-mail message sent from our support system.<br />\r\nDo not reply to this e-mail as we will not receive your reply!</p>','Hello \\n \\n I am inviting you to a video consultation session. Please click below to join the consultation (no account needed) \\n \\nVideo consultation time: {time} \\n \\nVideo consultation link: {URL} \\n \\nBest Regards,\\n{PRACTICE_NAME}','EMAIL',NULL,NULL,'2021-09-30 07:52:54',NULL,NULL,NULL),
(21,'reset_password_notification','Reset Password Notification','App\\Mail\\ResetPasswordMail','Reset Password Notification','<p>You are receiving this email because we received a password reset request for your account.</p>\r\n\r\n<p>{{RESET}}</p>\r\n\r\n<p>This password reset link will expire in 60 minutes.</p>\r\n\r\n<p>If you did not request a password reset, no further action is required.</p>\r\n\r\n<p>Regards,<br />\r\n{{PRACTICE_NAME}}</p>\r\n\r\n<p><span style=\"color:#e74c3c\"><strong>DO NOT REPLY TO THIS E-MAIL</strong></span><br />\r\nThis is an automated e-mail message sent from our support system.<br />\r\nDo not reply to this e-mail as we will not receive your reply!</p>','Hello \\n \\n I am inviting you to a video consultation session. Please click below to join the consultation (no account needed) \\n \\nVideo consultation time: {time} \\n \\nVideo consultation link: {URL} \\n \\nBest Regards,\\n{PRACTICE_NAME}','EMAIL',NULL,NULL,'2022-01-27 07:31:15',NULL,NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2021_09_30_053857_create_permission_tables',1),
(6,'2018_10_10_000000_create_mail_templates_table',2);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\Models\\User',2),
(2,'App\\Models\\User',5),
(2,'App\\Models\\User',6),
(2,'App\\Models\\User',7),
(1,'App\\Models\\User',8),
(2,'App\\Models\\User',12),
(2,'App\\Models\\User',15),
(6,'App\\Models\\User',16);

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `permission_label` varchar(255) DEFAULT NULL,
  `guard_name` varchar(255) NOT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`title`,`name`,`permission_label`,`guard_name`,`is_active`,`created_at`,`updated_at`) values 
(1,'Dashboard','home','Dashboard','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(2,'Settings','setting.index','Site configuration show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(3,'Settings','emailtemplate.index','Email template show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(4,'Settings','emailtemplates.create','Email edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(5,'User and role management','usermanagements.index','User show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(6,'User and role management','usermanagements.create','User create','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(7,'User and role management','usermanagements.edit','User edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(8,'User and role management','usermanagements.destroy','User delete','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(9,'User and role management','roles.index','Role show','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(10,'User and role management','roles.create','Role create','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(11,'User and role management','roles.edit','Role edit','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57'),
(12,'User and role management','roles.destroy','Role delete','web','Y','2021-09-30 06:06:57','2021-09-30 06:06:57');

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values 
(1,2),
(2,2),
(3,2),
(4,2),
(5,2),
(6,2),
(7,2),
(8,2),
(9,2),
(10,2),
(11,2),
(12,2),
(1,6),
(2,6),
(3,6),
(4,6),
(5,6),
(6,6),
(7,6),
(8,6),
(9,6),
(10,6),
(11,6),
(12,6);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `show_while_creating_user` enum('YES','NO') DEFAULT 'YES',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`show_while_creating_user`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'Super Admin','web','YES','2021-09-30 06:02:37',NULL,'2021-09-30 06:02:37',NULL,NULL,NULL),
(2,'Admin','web','YES','2021-09-30 06:02:38',NULL,'2021-09-30 06:02:38',NULL,NULL,NULL),
(6,'Demo 1','web','YES','2022-01-27 07:16:05',NULL,'2023-06-07 04:53:37',NULL,'2023-06-07 04:53:37',NULL);

/*Table structure for table `solutions` */

DROP TABLE IF EXISTS `solutions`;

CREATE TABLE `solutions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `document` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `solutions` */

insert  into `solutions`(`id`,`title`,`document`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(1,'VCR SYJC ACC Test 1 Bills of Exchange Paper + Solution','kvnEGaaVKogfahuMmyYLGkggvqdeVEQyhnFAb9AY.pdf','2023-06-08 07:27:04',2,'2023-06-08 07:27:04',NULL,NULL,NULL),
(2,'SYJC Accounts Test 2 Single Entry Paper and Solution','2G1ZckEsN4PdHucpWapmfnZYBNgtuljJou99C5bl.pdf','2023-06-08 07:27:36',2,'2023-06-08 07:27:36',NULL,NULL,NULL),
(3,'SYJC Accounts Test 3 Single Entry and Bills of Exchange Paper and Solution','BhCOwbNK6uo4IYYV9nkQ3D65T3lnQPDSydDCuOWy.pdf','2023-06-08 07:28:08',2,'2023-06-08 07:28:08',NULL,NULL,NULL),
(4,'SYJC Maths Paper - I Matrices and Logic Test 1.','m8mejW5IvSCN5APuvIvW0KLxZwOgsjtXUToJ7sVK.pdf','2023-06-08 07:28:39',2,'2023-06-08 07:28:39',NULL,NULL,NULL),
(5,'FYBMS 2nd Account Test Paper and Solution.','1sM7nwWMaeS6uSY0BCd5tjlhUgDoHjzWa73h88d5.pdf','2023-06-08 07:29:10',2,'2023-06-08 07:29:10',NULL,NULL,NULL),
(6,'FYBMS Sem I Test 3 Subsidiary Book & BRS QP Solution','KnAznbz9MrOBVhd7zhNoV3pO3VbvGfK0Ym7ImIwA.pdf','2023-06-08 07:29:36',2,'2023-06-08 07:29:36',NULL,NULL,NULL),
(7,'SYJC Accounts Test 7 NPO QP & Solution','RjTi9OW6vMYguItMkyTHdQ1q5P1h4y3bglyUlaqJ.pdf','2023-06-08 07:30:16',2,'2023-06-08 07:30:16',NULL,NULL,NULL),
(8,'SYJC Maths - II Test 2 Paper and Solution.','QCTMvOnHyR2lKJK0W6yBFbizVOdz1wdC5SjtLnwc.pdf','2023-06-08 07:30:36',2,'2023-06-08 07:30:36',NULL,NULL,NULL),
(9,'FYJC 5th Account Test Paper and Solution','ca3O1cCCkHRO4WeUhpqnTuTvJB6uVGK0jC5SwbwG.pdf','2023-06-08 07:31:11',2,'2023-06-08 07:31:11',NULL,NULL,NULL),
(10,'FYJC Account Test 6 Paper and Solution','1VcHl8MwRN2NDG0LpczVX4y96sY1SZc5Cl0jMqJ2.pdf','2023-06-08 07:31:39',2,'2023-06-08 07:31:39',NULL,NULL,NULL),
(11,'FYBAF-Sem I FA Pre Final Exam Paper and Solution','6WAYgq5k0weMm6jIONmsGQWKFNxn1jtqGP7OJnCz.pdf','2023-06-08 07:31:58',2,'2023-06-08 07:31:58',NULL,NULL,NULL),
(12,'FYBCom-Sem I Acc Pre Final Exam Paper and Solution','HJDJ6ZinhgkX0cO7vbn69NsQvGwQTIC68auA69Y3.pdf','2023-06-08 07:32:26',2,'2023-06-08 07:32:26',NULL,NULL,NULL),
(13,'FYBCom-Sem I Maths Pre Final Exam Paper and Solution','1xha0DzPyWPzrcurYbhQuoGsIPf0zw9tuAr9i0W5.pdf','2023-06-08 07:32:53',2,'2023-06-08 07:32:53',NULL,NULL,NULL),
(14,'FYBMS-Sem I Stats Pre Final Exam Paper and Solution','00GCA0yY3VXGgqmF9HcD8He4AS5nRTdYX4ygjdQJ.pdf','2023-06-08 07:33:16',2,'2023-06-08 07:33:16',NULL,NULL,NULL),
(15,'SYJC Accounts Test 8 Paper and Solution','TR4qOSwRewKLn5Qu3po8ZEBXdYkag3wcQsQ3q1Jx.pdf','2023-06-08 07:33:49',2,'2023-06-08 07:33:49',NULL,NULL,NULL),
(16,'SYJC Accounts Test 8 Paper and Solution - Adm, BOE, Single Entry, NPO','gPoFGv8aRZZw8VA23UcEQz0VWtwnxK1tpkiO6cLt.pdf','2023-06-08 07:34:11',2,'2023-06-08 07:34:11',NULL,NULL,NULL),
(17,'SYJC Account Test 9 Bills of Exchange and Final Account Paper and Solution.','6QBze3feps0zCWxZPv3QEtZoRn16QYg5p5oxfTZJ.pdf','2023-06-08 07:35:34',2,'2023-06-08 07:35:34',NULL,NULL,NULL),
(18,'Maths-I Unit Test 1 Solution and Question Paper','qVGEUD62aqD7SKuWyXwSWrijcmHB4z3hHXb3y2oe.pdf','2023-06-08 07:36:30',2,'2023-06-08 07:36:30',NULL,NULL,NULL),
(19,'SYJC Accounts Test Single Entry and Admission of Partner Paper and Solution.','TesvN2P7Fe73saNYOd30RnlgS4se5AdVBHmh8hT9.pdf','2023-06-08 07:41:52',2,'2023-06-08 07:41:52',NULL,NULL,NULL),
(20,'SYJC Eco 1st Unit Test Paper and Solution.','DGk204dFWp8F2E3m2QY0AqaJuJz6ogIKb1Rl9jIu.pdf','2023-06-08 07:42:17',2,'2023-06-08 07:42:17',NULL,NULL,NULL),
(21,'SYJC S.P. 1st Unit Test Paper and Solution.','bhR7Qf5w8j6OSHKLk4JyiVvewPB2WZmPfjq7l0uC.pdf','2023-06-08 07:42:39',2,'2023-06-08 07:42:39',NULL,NULL,NULL),
(22,'SYJC Maths - I 2nd Unit Test Paper and Solution.','L8gL6dajtbVyjvArB7t1yGQnZKwq1O9ZdVyUKeJg.pdf','2023-06-08 07:43:29',2,'2023-06-08 07:43:29',NULL,NULL,NULL),
(23,'SYJC OC 1st Unit Test Paper and Solution.','5OPzftJJ3hxsDtvywfxyTvFbtfMOCGwpTfi5uFIR.pdf','2023-06-08 07:44:07',2,'2023-06-08 07:44:07',NULL,NULL,NULL),
(24,'SYJC Accounts 1st Prelim Exam Paper and Solution','IyRZtK3e0X5j2i39dAmflXXkNDiyobQt3eQJZhmD.pdf','2023-06-08 07:44:47',2,'2023-06-08 07:44:47',NULL,NULL,NULL),
(25,'SYJC ECO 1st Prelim Exam Solution and Paper','hvlwejmFr46Hj5tRowmyk4VxsAVj3tLKVRQJX8eG.pdf','2023-06-08 07:45:10',2,'2023-06-08 07:45:10',NULL,NULL,NULL),
(26,'SYJC SP 1st Prelim Exam Paper and Solution.','NfLVsp3aHadsSTizBa5oOwvJl97drsrJdjRA4ctp.pdf','2023-06-08 07:45:37',2,'2023-06-08 07:45:37',NULL,NULL,NULL),
(27,'SYJC Maths 1st Prelim Paper and Solution','QqRIOkDcemHG72Wp8xuI4xgjoztJYXcVZTLQCaoO.pdf','2023-06-08 07:46:08',2,'2023-06-08 07:46:08',NULL,NULL,NULL),
(28,'SYJC Accounts 2nd Prelim Exam Paper and Solution','CsVebK5gw8QV8jVF19DwpIJwbprxQEsMhpcttscz.pdf','2023-06-08 07:46:34',2,'2023-06-08 07:46:34',NULL,NULL,NULL),
(29,'SYJC Maths 2nd Prelim Paper and Solution','zwcvBr3MXzLXJlpFhQeQA6gQCzu1pLxFropzKsUS.pdf','2023-06-08 07:49:21',2,'2023-06-08 07:49:21',NULL,NULL,NULL),
(30,'SYJC Accounts 3rd Prelim solution and Paper','2VzvDoQnpRi3ga4rH05CTHisVt3SE3ZSQildRsVq.pdf','2023-06-08 07:49:38',2,'2023-06-08 07:49:38',NULL,NULL,NULL),
(31,'SYJC OC 1st Prelim Exam Solution.','XPVgnS65rSzaJFhEEapibFLBvjhuvwVPF3fvuHDT.pdf','2023-06-08 07:49:58',2,'2023-06-08 07:49:58',NULL,NULL,NULL),
(32,'SYJC OC 2nd Prelim Exam Solution','c65w1HwtJ9h5NkBtCiwjPhcRbMeRvN1zZ3nj0ibS.pdf','2023-06-08 07:50:34',2,'2023-06-08 07:50:34',NULL,NULL,NULL),
(33,'SYJC Eco 2nd Prelim Exam Solution','hLcHQMI9mWmORmtDjs7oZKHo6rSgyYyQU3ZJfxoO.pdf','2023-06-08 07:51:03',2,'2023-06-08 07:51:03',NULL,NULL,NULL),
(34,'SYJC Eco 3rd Prelim Exam Solution','hoU48cDWRR11zmWMdoiN7gpQaixZWVhuHotzyiOs.pdf','2023-06-08 07:51:28',2,'2023-06-08 07:51:28',NULL,NULL,NULL),
(35,'SYJC SP 3rd Prelim Exam Solution','IJVDgFetUAhiXHe5EczSyXCmWpu16YfNXy3EniFk.pdf','2023-06-08 07:52:34',2,'2023-06-08 07:52:34',NULL,NULL,NULL),
(36,'SYJC Maths 3rd Prelim Exam Solution','uVp31BqQ2lO0A5qlZjeTHQxz0IIOlagAjVHb0BxK.pdf','2023-06-08 07:53:19',2,'2023-06-08 07:53:19',NULL,NULL,NULL),
(37,'SYJC Accounts 4th Prelim Exam Solution and Paper','gu8FncKRyaJJO9RFABT2jSbhoXjdeJR18HsWntRP.pdf','2023-06-08 07:53:49',2,'2023-06-08 07:53:49',NULL,NULL,NULL),
(38,'SYJC OC 3rd Prelim Exam Solution.','RsLNlo8aNtp9EIUC45WisFCzRoIKDIAZpp0FPLa8.pdf','2023-06-08 07:54:12',2,'2023-06-08 07:54:12',NULL,NULL,NULL),
(39,'FYBAF - BCOM Accounts Test 1 Consignment Accounts Paper and Solution.','GS6enyBXTf7ukkVI9ekbIijUD62zxnipC7KLWo1N.pdf','2023-06-08 07:54:55',2,'2023-06-08 07:54:55',NULL,NULL,NULL),
(40,'FYBAF-BCOM Account Test 2 - Branch Accounts Paper and Solution.','ZtfYzAxFE77xBtmuD68jfxaA8hNyDdE4wjiKlKWW.pdf','2023-06-08 07:55:19',2,'2023-06-08 07:55:19',NULL,NULL,NULL),
(41,'FYBAF-BCOM Accounts Test 3 Incomplete Records- Paper and Solution.','TYl7tbVIpHryQVHq1sdDxCq7QqPpeI1TSL7dLao6.pdf','2023-06-08 07:55:40',2,'2023-06-08 07:55:40',NULL,NULL,NULL),
(42,'FYBAF-BCOM Accounts Test 4 Fire Insurance Claims Paper and Solution','8SQ1XkCQ9yYstp9DlbppC5Ar82NGLVPcAqRZgwdD.pdf','2023-06-08 07:56:04',2,'2023-06-08 07:56:04',NULL,NULL,NULL),
(43,'FYBAF FA Full Portion Test','TmVUhd7QOsJET4Gc607nscBn17Zn9K6J6AMtnPdK.pdf','2023-06-08 07:56:31',2,'2023-06-08 07:56:31',NULL,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) NOT NULL,
  `logins` int DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `last_login_ip` varchar(50) DEFAULT NULL,
  `is_active` enum('Y','N') DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`profile`,`remember_token`,`logins`,`last_login_at`,`last_login_ip`,`is_active`,`created_at`,`created_by`,`updated_at`,`updated_by`,`deleted_at`,`deleted_by`) values 
(2,'Admin','admin@gmail.com',NULL,'$2y$10$ToxxJm5ajt7mSRb2tYCM4O9OpH5W7FEEt0nXIUd.gkG6D4euXv2T2','6pf3xNrGHKPBeSa7gmyNXkGnf0cSRoICLnU9YnIy.png','TVFRdhErfEBjNySy9sVQN65POXA9iyoGdq8ZqTYcwvonpls64XVZ0N17Rh47',27,'2023-06-08 10:33:48','127.0.0.1',NULL,'2021-09-30 06:14:32',NULL,'2023-06-08 10:33:48',2,NULL,NULL),
(4,'Alea Ward','navyro@mailinator.com',NULL,'$2y$10$ToxxJm5ajt7mSRb2tYCM4O9OpH5W7FEEt0nXIUd.gkG6D4euXv2T2',NULL,'',NULL,NULL,NULL,'N','2021-09-30 07:28:54',NULL,'2022-03-21 18:34:00',NULL,NULL,NULL),
(6,'Macon Shelton','sanjay.makwana@tiez.nl',NULL,'$2y$10$g29cJMCKoycpOtteglAH7u0A2K3E7YyCBLnEJRsObmDe0SgpcTbO.',NULL,'1DOY2KaYBdCPLsbzDN7ZknAm2qD7equ4WhimO3Tv7E990udvhHAy8SrB0VD9',NULL,NULL,NULL,NULL,'2021-09-30 08:02:25',NULL,'2021-10-05 08:08:32',NULL,NULL,NULL),
(7,'Jasper Zimmerman','qiwemitoce@mailinator.com',NULL,'$2y$10$g29cJMCKoycpOtteglAH7u0A2K3E7YyCBLnEJRsObmDe0SgpcTbO.',NULL,'',NULL,NULL,NULL,NULL,'2021-09-30 08:12:04',NULL,'2021-10-05 08:08:46',NULL,NULL,NULL),
(8,'Flynn Tyson','tiwyco@mailinator.com',NULL,'$2y$10$g29cJMCKoycpOtteglAH7u0A2K3E7YyCBLnEJRsObmDe0SgpcTbO.',NULL,'',NULL,NULL,NULL,NULL,'2021-10-05 07:58:19',NULL,'2021-10-05 07:58:19',NULL,NULL,NULL),
(12,'Cameron Suarez','genawysusa@mailinator.com',NULL,'$2y$10$g29cJMCKoycpOtteglAH7u0A2K3E7YyCBLnEJRsObmDe0SgpcTbO.',NULL,'flFa40n8q75vc3vR3rioExOF7UEyubnI7i27rpQLvJvpcvuFiyjMpcDhwZae',NULL,NULL,NULL,NULL,'2021-10-28 10:40:08',NULL,'2021-11-01 07:00:51',NULL,NULL,NULL),
(15,'Octavius Sykes','sufib@mailinator.com',NULL,'$2y$10$Q.CCydgEHFx2TunhGn/iauKnLdziE/p76SHMIQhlLPdiqBV.AxQUi',NULL,'',NULL,NULL,NULL,'N','2022-01-27 07:26:36',NULL,'2022-03-21 17:01:38',NULL,NULL,NULL),
(16,'Hyatt Wall','bynon@mailinator.com',NULL,'$2y$10$YP0e9BEZaNkr3U2q8i4kau.s9wFE0oml2zBlpx4213s4pAa3dwx7O',NULL,'',NULL,NULL,NULL,'Y','2022-03-21 18:41:05',NULL,'2022-12-22 08:25:42',2,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
