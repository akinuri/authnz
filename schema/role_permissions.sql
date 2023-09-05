CREATE TABLE `role_permissions` (
    `role_id`       int UNSIGNED NOT NULL,
    `permission_id` int UNSIGNED NOT NULL,
    `created_at`    datetime NOT NULL,
    `created_by`    int UNSIGNED NOT NULL,
    KEY `role_id` (`role_id`),
    KEY `permission_id` (`permission_id`),
    CONSTRAINT `role_permissions_ibfk_1`
        FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
            ON DELETE CASCADE,
    CONSTRAINT `role_permissions_ibfk_2`
        FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`)
            ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;