CREATE TABLE `roles` (
    `id`          int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name`        varchar(255) NOT NULL,
    `description` varchar(255) DEFAULT NULL,
    `created_at`  datetime NOT NULL,
    `created_by`  int UNSIGNED NOT NULL,
    `updated_at`  datetime DEFAULT NULL,
    `updated_by`  int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;