-- ---------------------------Updated Table user_details ON 19-12-2017--------------------------
ALTER TABLE `user_details` ADD `profile_for` VARCHAR(10) NULL AFTER `phone`, ADD `gender` VARCHAR(10) NULL AFTER `profile_for`, ADD `date` INT NULL AFTER `gender`, ADD `month` INT NULL AFTER `date`, ADD `year` INT NULL AFTER `month`, ADD `state` INT NULL AFTER `year`, ADD `religion` INT NULL AFTER `state`, ADD `mother_tongue` INT NULL AFTER `religion`;

-- ---------------------------Created Table 'dates' ON 26-12-2017--------------------------
CREATE TABLE `dates` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `dates`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------Created Table 'months' ON 26-12-2017--------------------------

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `month` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------Created Table 'mother_tongue' ON 26-12-2017--------------------------

CREATE TABLE `mother_tongue` (
  `id` int(11) NOT NULL,
  `mother_tongue` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `mother_tongue`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `mother_tongue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------Created Table 'religion' ON 26-12-2017--------------------------

CREATE TABLE `religion` (
  `id` int(11) NOT NULL,
  `religion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------Created Table 'years' ON 26-12-2017--------------------------

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

-- ---------------------------Created Table 'height' ON 26-12-2017--------------------------

CREATE TABLE `height` (
  `id` int(11) NOT NULL,
  `height` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `height`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `height`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------Created Table 'caste' ON 26-12-2017--------------------------

CREATE TABLE `caste` (
  `id` int(11) NOT NULL,
  `caste` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `caste`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `caste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------Updated Table 'user_details' ON 26-12-2017--------------------------

ALTER TABLE `user_details` ADD `country` INT NULL AFTER `year`;
ALTER TABLE `user_details` ADD `address` TEXT NULL AFTER `year`;
ALTER TABLE `user_details` ADD `city` INT NULL AFTER `state`;
ALTER TABLE `user_details` ADD `zipcode` VARCHAR(15) NULL AFTER `city`;
ALTER TABLE `user_details` ADD `height` INT NULL AFTER `mother_tongue`, ADD `marital_status` INT NULL AFTER `height`, ADD `caste` INT NULL AFTER `marital_status`, ADD `sub_caste` VARCHAR(255) NULL AFTER `caste`, ADD `complexion` INT NULL AFTER `sub_caste`, ADD `manglik` INT NULL AFTER `complexion`, ADD `gotra` VARCHAR(255) NULL AFTER `manglik`, ADD `bio` TEXT NULL AFTER `gotra`;
ALTER TABLE `user_details` ADD `birth_hour` INT NULL AFTER `year`, ADD `birth_mint` INT NULL AFTER `birth_hour`, ADD `birth_sec` INT NULL AFTER `birth_mint`;
ALTER TABLE `user_details` ADD `birth_place` VARCHAR(255) NULL AFTER `gotra`;
ALTER TABLE `user_details` CHANGE `complexion` `complexion` VARCHAR(255) NULL DEFAULT NULL;
ALTER TABLE `user_details` CHANGE `religion` `religion` VARCHAR(255) NULL DEFAULT NULL;

-- ---------------------------CREATEed Table 'family_details' ON 26-12-2017--------------------------

CREATE TABLE `family_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(255) DEFAULT NULL,
  `married_sisters` varchar(255) DEFAULT NULL,
  `unmarried_sisters` varchar(255) DEFAULT NULL,
  `married_brothers` varchar(255) DEFAULT NULL,
  `unmarried_brothers` varchar(255) DEFAULT NULL,
  `native_country` int(11) DEFAULT NULL,
  `native_state` int(11) DEFAULT NULL,
  `family_value` varchar(255) DEFAULT NULL,
  `affluence_level` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `family_details`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `family_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------CREATEed Table 'user_images' ON 26-12-2017--------------------------

CREATE TABLE `user_images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `user_images`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------CREATEed Table 'user_education_center' ON 26-12-2017--------------------------

CREATE TABLE `user_education_center` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `edu_qualification` int(11) DEFAULT NULL,
  `employed_as` int(11) DEFAULT NULL,
  `area_field` int(11) DEFAULT NULL,
  `employed_with` varchar(255) DEFAULT NULL,
  `annual_income` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `user_education_center`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user_education_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------CREATEed Table 'educational_qualification' ON 26-12-2017--------------------------

CREATE TABLE `educational_qualification` (
  `id` int(11) NOT NULL,
  `education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `educational_qualification`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `educational_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------CREATEed Table 'employed_as' ON 26-12-2017--------------------------

CREATE TABLE `employed_as` (
  `id` int(11) NOT NULL,
  `employed_as` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `employed_as`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `employed_as`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------CREATEed Table 'area_field' ON 26-12-2017--------------------------

CREATE TABLE `area_field` (
  `id` int(11) NOT NULL,
  `area_field` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `area_field`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `area_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------CREATEed Table 'annual_income' ON 26-12-2017--------------------------

CREATE TABLE `annual_income` (
  `id` int(11) NOT NULL,
  `annual_income` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `annual_income`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `annual_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- ---------------------------Updated Table 'caste' ON 27-12-2017--------------------------
ALTER TABLE `caste` ADD `status` TINYINT(1) NOT NULL DEFAULT '1' AFTER `caste`;

-- ---------------------------Updated Table 'mother_tongue' ON 27-12-2017--------------------------
ALTER TABLE `mother_tongue` ADD `status` TINYINT(1) NOT NULL DEFAULT '1' AFTER `mother_tongue`;

-- ---------------------------Updated Table 'height' ON 27-12-2017--------------------------
ALTER TABLE `height` ADD `status` TINYINT(1) NOT NULL DEFAULT '1' AFTER `height`;

-- ---------------------------Updated Table 'area_field' ON 27-12-2017--------------------------
ALTER TABLE `area_field` ADD `status` TINYINT(1) NOT NULL DEFAULT '1' AFTER `area_field`;

-- ---------------------------Updated Table 'educational_qualification' ON 27-12-2017--------------------------
ALTER TABLE `educational_qualification` ADD `status` TINYINT(1) NOT NULL DEFAULT '1' AFTER `education`;

-- ---------------------------Updated Table 'user_details' ON 28-12-2017--------------------------
ALTER TABLE `user_details` CHANGE `manglik` `manglik` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
ALTER TABLE `annual_income` ADD `status` TINYINT(1) NOT NULL DEFAULT '1' AFTER `annual_income`;
ALTER TABLE `employed_as` ADD `status` TINYINT(1) NOT NULL DEFAULT '1' AFTER `employed_as`;

-- ---------------------------Updated Table 'user_details' ON 06-01-2018--------------------------
ALTER TABLE `user_details` ADD `diet` INT NULL AFTER `birth_place`;