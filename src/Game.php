<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 1/6/2016
 * Time: 9:14 PM
 */
class Game{
    var $position;

    function __construct($squares){
        $this->position = str_split($squares);
    }

    function winner($token) {

        $won = false;

        for($row=0; $row<3; $row++){
            //echo 'ROW VALUE: '. $row.PHP_EOL;
            $won = true;
            for($col=0; $col<3; $col++){
                // echo "COL VALUE: " . (3*$row+$col).PHP_EOL;
                echo "INDEX: ". (3*$row+$col);
                if($this->position[3*$row+$col] != $token){
                    $won = false;
                    break;
                }
            }
            if($won){
                return $won;
            }

        }
        for($row=0; $row<3; $row++){
            //echo 'ROW VALUE: '. $row.PHP_EOL;
            $won = true;
            for($col=0; $col<3; $col++){
                // echo "COL VALUE: " . (3*$row+$col).PHP_EOL;
                echo "INDEX: ". (3*$col+$row);
                if($this->position[3*$col+$row] != $token){
                    $won = false;
                    break;
                }
            }
            if($won){
                return $won;
            }

        }

        if( ($this->position[0] == $token) && ($this->position[4] == $token) && ($this->position[8] == $token) ){
            $won = true;
        }
        elseif( ($this->position[2] == $token) && ($this->position[4] == $token) && ($this->position[6] == $token) ){
            $won = true;
        }

        return $won;

    }
    function display(){
        echo '<table style="font-size:large; font-weight:bold">';
        echo '<tr>';
        for($pos=0; $pos<9; $pos++){
            echo '<td>=</td>';
            if($pos % 3 == 2)
                echo '</tr><tr>';
        }
        echo '</tr>';
        echo '</table>';
    }
}