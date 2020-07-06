CREATE TABLE `todos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `completed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `todos` WRITE;
INSERT INTO `todos` (`id`, `description`, `completed`) VALUES 
	(1,'Buy dog food',0),
	(2,'Buy cat food',1),
	(3,'Take a nap',1);
UNLOCK TABLES;