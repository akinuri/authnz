CREATE TABLE `permissions` (
    `id`            int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name`          varchar(255) NOT NULL UNIQUE KEY,
    `display_name`  varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- name is used in the code, e.g. can("do_something")
-- display_name is used in the UI

