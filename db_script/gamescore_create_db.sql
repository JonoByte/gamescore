CREATE DATABASE `gamescore` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

/*kör rad ett först sen resten av tabellerna*/


CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profilepic` mediumblob DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `games` (
  `title` varchar(255) NOT NULL,
  `gameinfo` text NOT NULL,
  `agerating` int(11) NOT NULL,
  `releasedate` date NOT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `developer` varchar(255) DEFAULT NULL,
  `genre` enum('FPS','RPG','Adventure','Fantasy','MMORPG','Survival','Battle Royal','MOBA','RTS') NOT NULL,
  `platform` enum('PC','Playstation','Xbox','Nintendo') NOT NULL,
  `averagerating` float DEFAULT NULL,
  `coverimg` mediumblob DEFAULT NULL,
  `trailerurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `friends` (
  `user_id_a` varchar(255) NOT NULL,
  `user_id_b` varchar(255) NOT NULL,
  `status` enum('pending','accepted') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id_a`,`user_id_b`),
  KEY `fk_friends_user_b` (`user_id_b`),
  CONSTRAINT `fk_friends_user_a` FOREIGN KEY (`user_id_a`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_friends_user_b` FOREIGN KEY (`user_id_b`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `CONSTRAINT_1` CHECK (`user_id_a` <> `user_id_b`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(255) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` text NOT NULL,
  `reply` text DEFAULT NULL,
  `replycount` int(11) NOT NULL,
  `replydate` datetime NOT NULL,
  `forumcol` varchar(45) DEFAULT NULL,
  `fk_userId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK från users_idx` (`fk_userId`),
  CONSTRAINT `fk_userId` FOREIGN KEY (`fk_userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `review` (
  `user_id` varchar(255) NOT NULL,
  `game_title` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `content` text DEFAULT NULL,
  `reviewdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_id`,`game_title`),
  KEY `fk_review_game` (`game_title`),
  CONSTRAINT `fk_review_game` FOREIGN KEY (`game_title`) REFERENCES `games` (`title`),
  CONSTRAINT `fk_review_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

