<?php

function create_next_round_pairs ($two_arrays) {
        
                
        $newArraySlice_1 = $two_arrays[0];
        $newArraySlice_2 = $two_arrays[1];
                 
        
        //добавляем первый элемент второго массива на второе место первого массива
        array_splice($newArraySlice_1, 1, 0, array($newArraySlice_2[0]));
        
        // считаем сколько элементов в первом массиве, берем последний и добавляем его в конец второго массива
        $last_item = count($newArraySlice_1);
        $newArraySlice_1_lastItem = $newArraySlice_1[$last_item-1];
        array_push($newArraySlice_2, $newArraySlice_1_lastItem);
       
                       
        // удаляем последний элемент первого массива
        array_splice($newArraySlice_1, -1);
        
                        
        // удаляем первый элемент второго массива
        $newArraySlice_2 = array_slice($newArraySlice_2, 1);
        
                                
        $two_arrays[0] = $newArraySlice_1;
        $two_arrays[1] = $newArraySlice_2;
       

        for ($i=0; $i<count($newArraySlice_1); $i++) {
            //выводим имя игрока
            echo $two_arrays[0][$i]['name'];
            //проверяем указан ли город. Если да - выводим город
            if (isset($two_arrays[0][$i]['city'])) {
                echo ' ( ' . $two_arrays[0][$i]['city'] . ' ) ';
            } 
            //выводим имя игрока
            echo ' - ' . $two_arrays[1][$i]['name'];
            //проверяем указан ли город. Если да - выводим город
            if (isset($two_arrays[0][$i]['city'])) {
                echo ' ( ' . $two_arrays[1][$i]['city'] . ' ) ';
            }  
            echo '<br>';
        }

        return $two_arrays;

};

?>