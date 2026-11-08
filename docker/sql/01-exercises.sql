
CREATE TABLE `exercises`
(
    `id`          INT AUTO_INCREMENT PRIMARY KEY,
    `name`        VARCHAR(100) NOT NULL,
    `muscleGroup` VARCHAR(50)  NOT NULL,
    `difficulty`  VARCHAR(20)  NOT NULL,
    `description` TEXT         NULL
) DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

INSERT INTO `exercises` (`name`, `muscleGroup`, `difficulty`, `description`)
VALUES ('Bench Press', 'Prsia', 'Stredná', 'Tlak s veľkou činkou na rovnej lavičke.'),
       ('Squat', 'Nohy', 'Náročná', 'Drep s veľkou činkou na chrbte.'),
       ('Deadlift', 'Chrbát', 'Náročná', 'Mŕtvy ťah s veľkou činkou zo zeme.'),
       ('Pull Up', 'Chrbát', 'Stredná', 'Zhyby na hrazde nadhmatom.'),
       ('Lateral Raise', 'Ramená', 'Ľahká', 'Upažovanie s jednoručkami v stoji.');
