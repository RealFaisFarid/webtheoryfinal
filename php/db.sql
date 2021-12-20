CREATE TABLE `reg_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `reg_user` (`id`, `first_name`, `last_name`, `user_email`, `user_pass`) VALUES
(3, 'Hello', 'k', 'mrrajuiit@gmail.com', 'mrrajuiit');
