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