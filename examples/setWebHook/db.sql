CREATE TABLE `users`
(
    `id`    BIGINT(20) NOT NULL,
    `step`  VARCHAR(64) NOT NULL DEFAULT 'main',
    `value` VARCHAR(512) NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;