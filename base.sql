CREATE dataBase regime; 
use dataBase regime;

CREATE TABLE `user` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nom` VARCHAR(20),
  `email` VARCHAR(50),
  `mdp` VARCHAR(20)
);