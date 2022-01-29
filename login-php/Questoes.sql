
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `Questoes` (
  `Dificuldade` enum('Facil','Medio','Dificil') NOT NULL,
  `Materia` varchar(30) NOT NULL,
  `Enunciado` text NOT NULL,
  `Alt1` text NOT NULL,
  `Alt2` text NOT NULL,
  `Alt3` text NOT NULL,
  `Alt4` text NOT NULL,
  `Alt5` text NOT NULL,
  `IDquest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `Questoes`
  ADD PRIMARY KEY (`IDquest`);

ALTER TABLE `Questoes`
  MODIFY `IDquest` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


