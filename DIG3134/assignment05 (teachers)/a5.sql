SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `a5p2_reviews` (
  `review_id` int(11) NOT NULL auto_increment,
  `review_creation_date` datetime NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `game_review` varchar(5000) NOT NULL,
  `game_rating` varchar(2) NOT NULL,
  `game_image_url` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY  (`review_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `a5p2_reviews` (`review_id`, `review_creation_date`, `game_name`, `game_review`, `game_rating`, `game_image_url`, `user_id`) VALUES
(8, '2015-03-25 12:12:27', 'peterson game 1', 'game is no good', '5', 'URL', 4),
(6, '2015-03-24 11:49:10', 'jane''s game', 'I love this game!', '7', 'http://upload.wikimedia.org/wikipedia/en/thumb/d/d7/Bioshockcoverfinalcropped.jpg/256px-Bioshockcoverfinalcropped.jpg', 3),
(9, '2015-03-25 12:12:39', 'peterson game 2', 'game is really good', '10', 'image', 4),
(7, '2015-03-24 11:49:51', 'game 2', 'This game isn''t so good', '2', 'http://upload.wikimedia.org/wikipedia/en/8/8d/NES_Tetris_Box_Front.jpg', 2);

CREATE TABLE IF NOT EXISTS `a5p2_users` (
  `user_id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `access_level` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `a5p2_users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `access_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ad', 'Ministrator', 'administrator'),
(2, 'reviewer1', 'ea91d1a21c199021b2c32c6acbf65d5f', 'Bill', 'Smith', 'reviewer'),
(3, 'reviewer2', '8f0691f8f831460cb91385e4230588c8', 'Jane', 'Thomas', 'reviewer'),
(4, 'reviewer3', '5e63ede6e3da1edbe55a3508e3f5c402', 'Carolyn', 'Peterson', 'reviewer');
