CREATE TABLE `password_resets` (
    `id`                int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id`           int UNSIGNED NOT NULL,
    `reset_token`       varchar(255) NOT NULL,
    `lifespan`          int UNSIGNED NOT NULL,
    `created_at`        datetime NOT NULL,
    `created_user_ip`   varchar(255) NOT NULL,
    `created_ua`        varchar(255) NOT NULL,
    `used_at`           datetime DEFAULT NULL,
    `used_user_ip`      varchar(255) DEFAULT NULL,
    `used_ua`           varchar(255) DEFAULT NULL,
    KEY `user_id` (`user_id`),
    CONSTRAINT `password_resets_ibfk_1`
        FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
            ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- lifespan : minutes, the token/url will be valid for some specific duration
--            (this can also be turned into a expires_at)
-- for some edge cases, it might be wise to also store and check the email address
-- for the email address can change before the password is reset

