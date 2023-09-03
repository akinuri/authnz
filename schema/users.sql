CREATE TABLE `users` (
    `id`               int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `email`            varchar(255) NOT NULL UNIQUE KEY,
    `password`         varchar(255) NOT NULL,
    `display_name`     varchar(255) NOT NULL,
    `avatar`           varchar(255) DEFAULT NULL,
    `disabled_at`      DATETIME DEFAULT NULL,
    `loggedin_at`      DATETIME DEFAULT NULL,
    `created_at`       datetime NOT NULL,
    `created_by`       int(10) UNSIGNED NOT NULL,
    `updated_at`       datetime DEFAULT NULL, 
    `updated_by`       (10) UNSIGNED DEFAULT NULL
    `authz_updated_at` DATETIME DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- disabled_at            : disabled user can't log in
-- created_by             : for users that are added internally, w/o signup
-- loggedin_at            : last login time
-- updated_at, updated_by : tracks changes to the row
-- authz_updated_at       : when the user's roles/permissions changed
--                          (isn't necessarily part of the row, should not trigger changes,
--                           meaning, updating this shouldn't update updated_at)

