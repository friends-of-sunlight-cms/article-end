ALTER TABLE `sunlight_article` ADD `time_end` bigint(20) NOT NULL;
UPDATE `sunlight_article` SET `time_end` = `time`;