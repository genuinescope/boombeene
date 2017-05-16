
CREATE TABLE `users` (
 `id` int(32) NOT NULL AUTO_INCREMENT,
 `email` varchar(100) NOT NULL,
 `password` varchar(150) NOT NULL,
 `active` int(32) NOT NULL DEFAULT '1',
 `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `boombeene`.`users` (`id`, `email`, `password`, `active`, `created_date`) VALUES (NULL, 'nimesha.priyangi@gmail.com', MD5('123'), '1', CURRENT_TIMESTAMP);

ALTER TABLE `users` CHANGE `password` `pwd` VARCHAR(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;







