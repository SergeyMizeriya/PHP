<?php
$sqlPlayer = "CREATE TABLE player ( 
    id INT NOT NULL AUTO_INCREMENT ,  
    name VARCHAR(255) NOT NULL ,  
    city VARCHAR(255) NOT NULL ,    
    PRIMARY KEY  (id)) 
    ENGINE = InnoDB;";

$sqlTournament = "CREATE TABLE tournament ( 
    id INT NOT NULL AUTO_INCREMENT ,  
    name VARCHAR(255) NOT NULL ,  
    star_date DATE NOT NULL ,    
    PRIMARY KEY  (id)) 
    ENGINE = InnoDB;";

$sqlRelations = "CREATE TABLE relations ( 
    id INT NOT NULL AUTO_INCREMENT , 
    playerID INT(11) NOT NULL , 
    TournamentID INT(11) NOT NULL ) 
    ENGINE = InnoDB;";


//создаем всех игроков
$sqlInsert_0 = "INSERT INTO player (name, city) VALUES ('Player 1', 'Brest'),('Player 2', 'Grodno'),('Player 3', 'Pinsk'),('Player 4', 'Orsha'),('Player 5', 'Lida');";
//создаем три турнира
$sqlInsert_1 = "INSERT INTO tournament (name, star_date) VALUES ('Tournament A', '2022-05-10'), ('Tournament B', '2022-05-11'), ('Tournament C', '2022-05-12');";
//создаем отношения между игроками и турнирами
$sqlInsert_2 = "INSERT INTO relations (playerID, TournamentID) VALUES ('1', '1'), ('2', '1'), ('1', '2'), ('2', '2'), ('3', '2'), ('3', '3'), ('4', '3'), ('5', '3');";
//выводим всю таблицу
$sqlSELECT_3 = "SELECT tournament.name, player.name FROM player, tournament, relations WHERE relations.tournamentID = tournament.ID AND relations.playerID = player.id;";
//запрос с использованием JOIN
$sqlSELECT_4 = "SELECT tournament.name, player.name FROM relations JOIN player ON relations.playerID = player.id JOIN tournament ON relations.tournamentID = tournament.id;"
?>
