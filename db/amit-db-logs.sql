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

-- ---------------------------Updated Table employed_as ON 16-01-2018--------------------------

  CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `slider` (`id`, `image`, `created_date`) VALUES
(11, '8194d5.jpg', '2018-01-16 15:14:32'),
(12, '87daeb.jpg', '2018-01-16 15:14:32'),
(13, '87632c.jpg', '2018-01-16 15:14:32'),
(14, '77b805.jpg', '2018-01-16 15:14:32');

ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;


-- ---------------------------Updated Table employed_as ON 24-02-2018--------------------------

ALTER TABLE `user_details` ADD `mobile` VARCHAR(255) NOT NULL AFTER `phone`, ADD `alt_mobile` VARCHAR(255) NOT NULL AFTER `mobile`;
ALTER TABLE `user_details` CHANGE `mobile` `mobile` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
ALTER TABLE `user_details` CHANGE `alt_mobile` `alt_mobile` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;


-- ---------------------------Updated Table employed_as ON 05-03-2018--------------------------

ALTER TABLE `user_education_center` ADD `additional_education` VARCHAR(255) NOT NULL AFTER `edu_qualification`;

-- ---------------------------Updated Table employed_as ON 14-03-2018--------------------------

RENAME TABLE `siyakeram`.`additional_qualification` TO `siyakeram`.`success_stories`;
ALTER TABLE `success_stories` CHANGE `additional_edu` `name` VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `success_stories` ADD `image` VARCHAR(500) NOT NULL AFTER `status`, ADD `description` TEXT NOT NULL AFTER `image`;

INSERT INTO `success_stories` (`id`, `name`, `status`, `image`, `description`) VALUES
(4, 'Nidhi and Apoorv', 1, '9f7015.webp', '“We registered Nidhi’s profile on SiyaKRam in April’16, and within 2 months we were able to finalize Nidhi’s marriage with Apoorv. We just met about 4-5 shortlisted boys that were shared by LoveVivah team, and luckily it didn’t take too long for us. We are pleased with the efforts put in by the team and more importantly, the apt selection of profiles by them really helped us in making a quick and informed decision. We are really thankful to SiyaKRam and its Customer Service team.” - Nidhi’s elder sister (who registered on LoveVivah on her behalf).'),
(5, 'Priyanka and Pawan', 1, '1c98d0.webp', '“We had a seamless experience finding a perfect girl for Pawan. We opted for personalized matchmaking service on SiyaKram and within 3 months we were able to finalize the match,” said Pawan’s father. On Priyanka’s end, it was much smoother an experience. The very first profile they shortlisted on SiyaKram was Pawan’s and things got finalized in the very first attempt for Priyanka. “SiyaKram played a cupid’s role here to make both ends meet and I am happy that I found Priyanka, my better half with consistent support from Gunjan.”- Pawan. We are Really thankful to Gunjan and SiyaKram’s team.');

-- ---------------------------Updated Table employed_as ON 13-04-2018--------------------------

ALTER TABLE `family_details` ADD `father_name` VARCHAR(255) NOT NULL AFTER `about_family`;