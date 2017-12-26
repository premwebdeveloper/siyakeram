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