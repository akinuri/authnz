-- See https://en.wikipedia.org/wiki/Entity%E2%80%93attribute%E2%80%93value_model
CREATE TABLE `settings` (
    `id`         int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `entity`     varchar(255) DEFAULT NULL,
    `attribute`  varchar(255) NOT NULL,
    `value`      text DEFAULT NULL,
    `updated_at` datetime DEFAULT NULL,
    `updated_by` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;