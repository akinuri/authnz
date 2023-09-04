CREATE TABLE `role_users` (
    `role_id`    int UNSIGNED NOT NULL,
    `user_id`    int UNSIGNED NOT NULL,
    `created_at` datetime NOT NULL,
    `created_by` int UNSIGNED NOT NULL,
    KEY `role_id` (`role_id`),
    KEY `user_id` (`user_id`),
    CONSTRAINT `role_users_ibfk_1`
        FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
            ON DELETE CASCADE,
    CONSTRAINT `role_users_ibfk_2`
        FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
            ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;