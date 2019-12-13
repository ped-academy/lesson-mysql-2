DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `post` (`id`, `title`, `content`, `creation_date`)
VALUES
	(1,'Il primo post per la Ped Academy','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo dui eget purus porta maximus. Nulla in consectetur nisl. Mauris ex nunc, hendrerit quis consectetur ut, lobortis consequat lorem. Duis et dolor eget augue suscipit facilisis. Curabitur eu massa quis lacus vehicula semper ac eu augue. Aliquam erat volutpat. Pellentesque vitae arcu vulputate, porta massa in, elementum velit. In vel ante pellentesque est eleifend pulvinar ac non sem.','2019-10-04 00:00:00'),
	(2,'Il secondo post per la Ped Academy','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo dui eget purus porta maximus. Nulla in consectetur nisl. Mauris ex nunc, hendrerit quis consectetur ut, lobortis consequat lorem. Duis et dolor eget augue suscipit facilisis. Curabitur eu massa quis lacus vehicula semper ac eu augue. Aliquam erat volutpat. Pellentesque vitae arcu vulputate, porta massa in, elementum velit. In vel ante pellentesque est eleifend pulvinar ac non sem.','2019-10-04 00:00:00');