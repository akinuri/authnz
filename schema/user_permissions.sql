CREATE TABLE `user_permissions` (
    `user_id`       int UNSIGNED NOT NULL,
    `permission_id` int UNSIGNED NOT NULL,
    `created_at`    datetime NOT NULL,
    `created_by`    int UNSIGNED NOT NULL,
    KEY `user_id` (`user_id`),
    KEY `permission_id` (`permission_id`),
    CONSTRAINT `user_permissions_ibfk_1`
        FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
            ON DELETE CASCADE,
    CONSTRAINT `user_permissions_ibfk_2`
        FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`)
            ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;