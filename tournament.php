<?php
class Tournament 
{
    private $name;
    private $date;
    private $players;
    

    function addPlayer ($player) {
        $this->players[] = $player;
        return $this;
    }
    public function showPlayers () {
        return $this->players;
    }

    public function showTournamentName () {
        echo $this->name;
    }
    
    public function showDate () {
        echo date('Y.m.d');
    }

    public function __get($property) {
		return $this->$property;
	}

    public function createPairs () {
        
        $players = $this->players;
        $game_players = [];
        
        //перебираем объекты класса в простой массив
        foreach($players as $player){
            array_push($game_players, ['name'=>$player->showName(),'city'=> $player->showCity()]);
        }
        // проверка на случай, если введен только один участник турнира
        if (count($game_players) < 2) {
            exit('В соревновании должны участвовать минимум два игрока!');
        }
        //в случае, если введено нечетное количесвто игроков добавляем в массив запись "не играет сегодня"
        if (count($game_players) % 2 != 0) {
            $newFakePlayer['name'] = "не играет сегодня";
            array_push($game_players, $newFakePlayer);
        }
        
        
        
        //делим массив пополам
        $countArray = count($game_players);
        $newArraySlice_1 = array_slice($game_players, 0, $countArray/2);
        $newArraySlice_2 = array_slice($game_players, $countArray/2);
        $two_arrays = [$newArraySlice_1, array_reverse($newArraySlice_2)];
               
        require_once('function.php');
        
        for ($i=0;$i<count($game_players)-1; $i++) {
            echo $this->showTournamentName() . ', ' . date('d.m.Y', mktime(0, 0, 0, date('m'), date('d')+1+$i, date('Y') ) ) . '<br>';
            
            $two_arrays = create_next_round_pairs($two_arrays);
            echo '<br>';
        }
    }
    

    public function __construct($name, $date=' ')

    {
        $this->name = $name;
        $this->date = $date;
        
    }
}

?>