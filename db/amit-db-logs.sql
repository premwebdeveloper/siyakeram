-- ---------------------------Updated Table user_details ON 02-01-2018--------------------------
ALTER TABLE `family_details` ADD `about_family` TEXT NULL AFTER `user_id`;

-- ---------------------------Updated Table annual_income ON 03-01-2018--------------------------
CREATE TABLE `annual_income` (
  `id` int(11) NOT NULL,
  `annual_income` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `annual_income` (`id`, `annual_income`, `status`) VALUES
(1, 'Dont Want to Specify', 1),
(2, 'INR Up to 50 Thousand', 1);

ALTER TABLE `annual_income`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `annual_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- ---------------------------Updated Table area_field ON 03-01-2018--------------------------

  CREATE TABLE `area_field` (
  `id` int(11) NOT NULL,
  `area_field` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `area_field` (`id`, `area_field`, `status`) VALUES
(1, 'Administrative Services', 1),
(2, 'Advertising/Marketing', 1);

ALTER TABLE `area_field`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `area_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- ---------------------------Updated Table educational_qualification ON 03-01-2018--------------------------

  CREATE TABLE `educational_qualification` (
  `id` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `educational_qualification` (`id`, `education`, `status`) VALUES
(1, 'A.M.I.E', 1),
(2, 'ACS', 1);

ALTER TABLE `educational_qualification`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `educational_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- ---------------------------Updated Table employed_as ON 03-01-2018--------------------------

  CREATE TABLE `employed_as` (
  `id` int(11) NOT NULL,
  `employed_as` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `employed_as` (`id`, `employed_as`, `status`) VALUES
(1, 'Accounting Professional', 1),
(2, 'Actor', 1);

ALTER TABLE `employed_as`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `employed_as`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- ---------------------------Updated Table employed_as ON 04-01-2018--------------------------

  CREATE TABLE `height` (
  `id` int(11) NOT NULL,
  `height` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `height` (`id`, `height`, `status`) VALUES
(1, '122cm - 4ft', 1),
(2, '125cm - 4ft 1in', 1),
(3, '128cm - 4ft 2in', 1);

ALTER TABLE `height`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `height`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;