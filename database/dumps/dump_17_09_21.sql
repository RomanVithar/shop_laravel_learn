-- shop.failed_jobs definition

CREATE TABLE `failed_jobs`
(
    `id`         bigint unsigned                         NOT NULL AUTO_INCREMENT,
    `uuid`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `connection` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `queue`      text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `payload`    longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `exception`  longtext COLLATE utf8mb4_unicode_ci     NOT NULL,
    `failed_at`  timestamp                               NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- shop.migrations definition

CREATE TABLE `migrations`
(
    `id`        int unsigned                            NOT NULL AUTO_INCREMENT,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch`     int                                     NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 49
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- shop.password_resets definition

CREATE TABLE `password_resets`
(
    `email`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`      varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp                               NULL DEFAULT NULL,
    KEY `password_resets_email_index` (`email`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- shop.personal_access_tokens definition

CREATE TABLE `personal_access_tokens`
(
    `id`             bigint unsigned                         NOT NULL AUTO_INCREMENT,
    `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `tokenable_id`   bigint unsigned                         NOT NULL,
    `name`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token`          varchar(64) COLLATE utf8mb4_unicode_ci  NOT NULL,
    `abilities`      text COLLATE utf8mb4_unicode_ci,
    `last_used_at`   timestamp                               NULL DEFAULT NULL,
    `created_at`     timestamp                               NULL DEFAULT NULL,
    `updated_at`     timestamp                               NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
    KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- shop.products definition

CREATE TABLE `products`
(
    `id`          bigint unsigned                         NOT NULL AUTO_INCREMENT,
    `cost`        int                                     NOT NULL,
    `title`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `weight`      int                                     NOT NULL,
    `dimension`   json                                    NOT NULL,
    `description` text COLLATE utf8mb4_unicode_ci         NOT NULL,
    `image`       varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 11
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- shop.users definition

CREATE TABLE `users`
(
    `id`                bigint unsigned                         NOT NULL AUTO_INCREMENT,
    `email`             varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `phone`             varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `name`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `surname`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `patronymic`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `address`           varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `role`              varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email_verified_at` timestamp                               NULL DEFAULT NULL,
    `password`          varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `remember_token`    varchar(100) COLLATE utf8mb4_unicode_ci      DEFAULT NULL,
    `created_at`        timestamp                               NULL DEFAULT NULL,
    `updated_at`        timestamp                               NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `users_email_unique` (`email`),
    UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE = InnoDB
  AUTO_INCREMENT = 11
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- shop.baskets_products definition

CREATE TABLE `baskets_products`
(
    `id_basket`  bigint unsigned NOT NULL,
    `id_product` bigint unsigned NOT NULL,
    `count`      int             NOT NULL,
    PRIMARY KEY (`id_basket`, `id_product`),
    KEY `baskets_products_id_product_foreign` (`id_product`),
    CONSTRAINT `baskets_products_id_basket_foreign` FOREIGN KEY (`id_basket`) REFERENCES `users` (`id`),
    CONSTRAINT `baskets_products_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- shop.deals definition

CREATE TABLE `deals`
(
    `id`            bigint unsigned                         NOT NULL AUTO_INCREMENT,
    `id_user`       bigint unsigned                         NOT NULL,
    `cost_delivery` int                                     NOT NULL,
    `cost_type`     varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `status`        varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at`    timestamp                               NULL DEFAULT NULL,
    `updated_at`    timestamp                               NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `deals_id_user_foreign` (`id_user`),
    CONSTRAINT `deals_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE = InnoDB
  AUTO_INCREMENT = 11
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;


-- shop.products_deals definition

CREATE TABLE `products_deals`
(
    `id_deal`    bigint unsigned NOT NULL,
    `id_product` bigint unsigned NOT NULL,
    `count`      int             NOT NULL,
    PRIMARY KEY (`id_deal`, `id_product`),
    KEY `products_deals_id_product_foreign` (`id_product`),
    CONSTRAINT `products_deals_id_deal_foreign` FOREIGN KEY (`id_deal`) REFERENCES `deals` (`id`),
    CONSTRAINT `products_deals_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;
